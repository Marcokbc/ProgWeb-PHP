<?php

namespace App\Entity;

use App\DB\DataBase;
use \PDO;

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
        $this->id = $obDatabase->insert([
                        'titulo' => $this->titulo,
                        'descricao' => $this->descricao,
                        'ativo' => $this->ativo,
                        'data' => $this->data
        ]);

         return true;
     }

     /**
      * Metodo responsavel por atuazalizar a vaga no banco
      * @return boolean 
      */
     public function atualizar(){
        return (new Database('vagas'))->update('id = '.$this->id,[
                                                                    'titulo' => $this->titulo,
                                                                    'descricao' => $this->descricao,
                                                                    'ativo' => $this->ativo,
                                                                    'data' =>  $this->data
        ]);
     }

     /**
      * Metodo responsavel por excluir a vaga do banco
      * @return boolean
      */
     public function excluir(){
         return (new DataBase('vagas'))->delete('id = '.$this->id);
     }

     /**
      * Metodo responsavel por obter as vagas do banco de dados
      *
      * @param string $where
      * @param string $order
      * @param string $limit
      * @return array
      */
     public static function getVagas($where = null, $order = null, $limit = null){
        return (new Database('vagas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        //fetchAll transforma todo retorno em um array, o primeiro aytributo define que o tipo de fetch que vai ser retornado no caso classe, e o tipo de objeto é definido pelo segundo
     }

     /**
      * Metodo responsavel por buscar uma vaga com base em seu ID
      * @param interger $id
      * @return Vaga
      */
     public static function getVaga($id){
        return (new DataBase('vagas'))->select('id = '.$id)->fetchObject(self::class);
        //o fetchObject, diferente do All, pega somente um e o transforma em objeto e instanciando na classe dos parametros
     }
}