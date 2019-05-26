<?php


class Database
{
    private $host = "localhost";
    private $db_name = "creatphpfun";
    private $username = "root";
    private $password = "g36*masa";
    public $conn;

    //get db con
    public function getConnection(){
        $this->conn =null;


        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dnname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set name utf8");
        }catch (PDOException $exception){
            echo "Connection erro: ".$exception->getMessage();
        }
        return $this->conn;
    }

}
