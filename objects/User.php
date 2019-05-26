<?php


class User
{
    private $conn;
    private $table_name = "user";

    public $id;
    public $username;
    public $password;
    public $created;

    /**
     * User constructor.
     * @param $conn
     */
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function signup(){
        if($this->isAlredyExist){
            return false;
        }
        //qeuory to insert
        $query = "INSERT INTO".$this->table_name."
        SET
            username =:username, password=:password, created=:created";
        $stmt = $this->conn->prepare($query);
        //sanitize
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->creted= htmlspecialchars(strip_tags($this->created));
        //bindvalue
        $stmt->bindParma(":username",$this->username);
        $stmt->bindParam(":password",$this->password);
        $stmt->bindParam(":created",$this->created);
        //execute qeuory
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;



    }

    function login(){
        //select all query
        $query = "SELECT 
            `id`,`username`,`password`,`created`
            FROM
                ".$this->table_name."
            WHERE
                username='".$this->username."'AND password='".$this->password."'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function isAlreadyExist(){
        $query = "SELECT *
        From 
             ".$this->table_name ."
        WHERE
            username='".$this->username."'";
        $stmt = $this->conn->preper($query);

        $stmt->execute();
        if($stmt->rowcount()>0){
            return true;
        }else{
            return false;
        }


    }




}