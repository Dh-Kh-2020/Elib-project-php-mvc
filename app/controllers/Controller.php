<?php
namespace coding\app\controllers;
use coding\app\system\AppSystem;

class Controller {
    
    public function view($viewName, $params=[]){
        AppSystem::$appSystem->router->view($viewName, $params);
    }

    // public function model($model_name){
    //     require_once 'app/models/'.$model_name.'.php';

    //     return new $model_name();
    // }

    // public function view($view_name){

    //     require_once 'app/views/'.$view_name.'.php';

    // }
}

?>
