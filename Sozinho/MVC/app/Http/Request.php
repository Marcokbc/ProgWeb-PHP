<?php

namespace App\Http;

class Request{
    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL
     * @var array
     */
    private $queryParams = [];

    /**
     * Variaveis recebidas no post da pag
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     * @var array
     */
    private $headers;

    /**
     * Construtor da pagina
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Metodo responsavel por retornar o metodo http da requisição
     * @return string
     */
    public function getHttpMethod(){
        return $this->httpMethod;
    }

    /**
     * Metodo responsavel por retornar a URI da requisição
     * @return string
     */
    public function getUri(){
        return $this->uri;
    }

    /**
     * Metodo responsavel por retornar os headers da requisição 
     * @return array
     */
    public function getHeaders(){
        return $this->headers;
    }
    /**
     * Metodo responsavel por retornar os parametros da requisição 
     * @return array
     */
    public function getQueryParams(){
        return $this->httpMethod;
    }
    /**
     * Metodo responsavel por retornar as variaveis do post da requisição
     * @return string
     */
    public function getPostVars(){
        return $this->postVars;
    }
}