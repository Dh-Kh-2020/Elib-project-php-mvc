<?php
namespace coding\app\controllers;

require_once "Controller.php";

class HomeCtrl extends Controller{
    
    public static function index(){
        self::view('home');
    }

    public static function cart(){
        self::view('cart');
    }

    public static function category(){
        self::view('category' /*, $users */);
    }
    
    public static function details(){
        self::view('details'/*, $users*/);
    }
}

?>