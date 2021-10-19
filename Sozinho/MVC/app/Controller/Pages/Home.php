<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{ 
    /*
        Metodo resposavel por retornar o conteudo view da nossa home
    */

    public static function getHome(){
        //Vew da home
        $content = View::render('pages/home',[
            'name' => 'MARCO',
            'description' => 'ESTUDO',
            'site' => 'Exemplo de site'
        ]);
        //Retorna a view da pagina
        return parent::getPage('MARCO',$content);
    }
}