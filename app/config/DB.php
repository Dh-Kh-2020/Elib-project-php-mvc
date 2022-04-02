<?php
namespace coding\app\config;

class DB{
    private $dsn;
    public $conn;

    public function __construct($dbConfig){
        try {
            $dsn="mysql:host=".$dbConfig['servername'].";dbname=".$dbConfig['dbname']."";
            $username=$dbConfig["username"];
            $pass=$dbConfig["dbpass"];
            $this->conn=new \PDO($dsn,$username,$pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $e) {
            echo "PDO CONNECTIN ERROR: " . $e->getMessage();
        }
    }

    // public function __destruct(){
    //     $this->conn = null;
    // }
}