<?php
namespace coding\app\controllers;

class UsersCtrl extends Controller{

    public function show(){
         //here is the db work
    $this->view('dashboard'/*, $users*/);
    }
}
?>