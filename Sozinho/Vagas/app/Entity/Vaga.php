<?php

namespace App\Entity;

use App\DB\DataBase;

class Vaga{
    /**
     * Identificador único da vaga
     * @var [type]
     */
    public $id;

    /**
     * Titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descricao (Pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga esta ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * data de publicação da vaga
     * @var string
     */
    public $data;
    /**
     * Método responsavel por cadastrar uma nova vaga no banco 
     *@return boolean
     */

     public function cadastrar(){
         //DEFINIR A DATA
         $this->data = date('Y-m-d  H:i:s');

         //INSERIR A VAGA NO BANCO
        $obDatabase = new DataBase('vagas');
        $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);
         //ATRIBUIR O ID DA VAGA NA INSTANCIA

         //RETORNAR SUCESSO
     }
}