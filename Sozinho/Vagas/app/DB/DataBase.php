<?php

namespace App\DB;

use \PDO;
use PDOException;

class DataBase{
    /**
     * Host de conecção do banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * nome do banco de dados
     * @var string
     */
    const NAME = 'marco_vagas';

    /**
     * Usuário do banco
     * @var string
     */
    const USER = 'root';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = '';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * instancia de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Metodo responsavel por criar uma conexão com o banco de dadoss
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::)
        }catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }
}