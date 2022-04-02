<?php
namespace coding\app\system;

class Request{

    public function getRoute(){
        return $_SERVER['REQUEST_URI'];
    }

    public function getRequestMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }
}