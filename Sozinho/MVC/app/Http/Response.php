<?php

namespace App\Http;

class Response{

    /**
     * Código do Status HTTP
     * @var int
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteudo que esta sendo retornado
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * conteudo do response
     * @var mixed
     */
    private $content;

    /**
     * Metodo responsavel por inciar a classe e definir os valores
     * @param interger $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct($httpCode,$content,$contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
        
    }

    /**
     * Método responsavel por alterar o content type do response
     * @param string $contentType
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Método resposavel por adicionar um reistro no cabeçalho de response
     * @param string $key
     * @param string $value
     */
    public function addHeader($key,$value){
        $this->headers[$key] = $value;
    }

    /**
     * Método responsável por enviar os headers para o navegador
     */
    private function sendHeaders(){
        //STATUS
        http_response_code($this->httpCode);//define o status de retorno
    
        //ENVIAR HEADERS
        foreach($this->headers as $key=>$value){
            header($key.': '.$value);
        }
    }

    /**
     * Método responsável por enviar a resposta para o usuario
     * 
     */
    public function sendResponse(){
        //ENVIA OS HEADERS
        $this->sendHeaders();

        //IMPRIME O CONTEUDO
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}