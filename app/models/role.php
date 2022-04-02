<?php
namespace coding\app\models;

class Role extends Model{

    function __construct(){
        parent::$tblName = "roles";
    }

    public function ___set($name, $value){
        $this->$name = $value; 
    }
}