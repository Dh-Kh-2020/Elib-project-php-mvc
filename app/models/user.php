<?php
namespace coding\app\models;

class User extends Model{

    function __construct(){
        parent::$tblName = "users";
    }

    public function ___set($name, $value){
        $this->$name = $value; 
    }
}