<?php
namespace coding\app\models;

class Category extends Model{

    function __construct(){
        parent::$tblName = "categories";
    }

    public function ___set($name, $value){
        $this->$name = $value; 
    }
}