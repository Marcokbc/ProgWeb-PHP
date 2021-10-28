<?php

namespace App\Http;

class Response{

    /**
     * Código do Status HTTP
     * @var interger
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
        $this->$httpCode = $httpCode;
        $this->content = $content;
        
    }

    /**
     * Método responsavel por alterar o content type do response
     * @param string $contentType
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
    }

    public function addHeader($key,$value){
        $this
    }
}