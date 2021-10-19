<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{ 
    /*
        Metodo resposavel por retornar o conteudo view da nossa home
    */

    public static function getHome(){
        $MaOrganization = new Organization();
        //Vew da home
        $content = View::render('pages/home',[
            'name' => $MaOrganization->name,
            'description' => $MaOrganization->description,
            'site' => $MaOrganization->site
        ]);
        //Retorna a view da pagina
        return parent::getPage('MARCO',$content);
    }
}