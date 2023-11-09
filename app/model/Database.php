<?php 

include_once __DIR__ . '/../../config/config.php';

class Database
{
    private $host;
    private $user;
    private $password;
    private $name;

    private $conn;

    function __construct()
    {

        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASS;
        $this->dbname = DB_NAME;
    }

    //Método para conexão com o banco de dados
    public function connect ()
    {

        $this->coon = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->dbname
        );

        if ($this->conn->connnect_error) {
            die("falha na conexão!" . $this->conn->connect_error);
        }
        return $this->conn;
    }
    
    //Método para fechar a conexão com o banco de dados


    public function close()
    {
        if ($this->conn) 
        $this->conn->close();

        
    }



    
}










?>