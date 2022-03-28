<?php
namespace coding\app\controllers;

require_once "Controller.php";
class HomeController extends Controller{

   
    public static function index(){

        $this->view("index");

    }
    public static  function show(){
        echo "inside show user insex";
    
    }
}

?>