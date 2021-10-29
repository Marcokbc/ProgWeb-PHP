<?php

namespace App\Http;

class Router{
    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Indice de rotas
     * @var array
     */
    private $routes = [];
    
    /**
     * Instancia de request
     * @var Request
     */
    private $request;

    /**
     * Metodo responsavel por iniciar a classe
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Método responsável por definir o prefixo das rotas
     */
    private function setPrefix(){
        //Informações da URL ATUAL
        $parseUrl = parse_url($this->url);
        
        //DEFINE O PREFIXO
        $this->prefix =  $parseul['path'] ?? '';
    }

    /**
     *? Metodo responsavel por definir
     * @param string 
     * @param array $params
     */
    public function get($route, $params =[])
}