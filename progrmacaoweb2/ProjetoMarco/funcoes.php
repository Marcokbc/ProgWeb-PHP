<?php
    define('ARQUIVO', 'Dados.txt');
    function recuperarDados(){
        $conteudo = file_get_contents(ARQUIVO);
        $dados = explode("\n", $conteudo);
        return $dados;
    }
    function excluirLivro($indice,$dados){
        array_splice($dados,$indice,1);
        $abrir = fopen(ARQUIVO,'w');
        $conteudo = implode("\n", $dados);
        fwrite($abrir,$conteudo);
        fclose($abrir);
        return $dados;
    }

    function listarDados($dados){
        $dados = array_filter($dados);
        $livros = [];    
        foreach($dados as $linha){
        if($linha !== ""){
        $livro = explode(";", $linha);
        array_push($livros,$livro);
        }
        
        }
        
        return $livros;
    }

    function cadastrarLivro($titulo,$descricao,$nota,$leu){
        $linha = "$titulo;$descricao;$nota;$leu\n";
            $aberto = fopen(ARQUIVO, 'a');
            fwrite($aberto,$linha);
            fclose($aberto);
    }