<?php
namespace coding\app\controllers;
use coding\app\models\User;

class UsersCtrl extends Controller{

    public function listAllUsers(){
        $users = new User();
        $allUsers = $users->getAll();

        self::view('users-list', $allUsers);
    }

    public function createUser(){
        self::view('new-user');
    }
    
    // Insert new admin into DB
    public function saveUser(){
        $user = new User();
        $user->name = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);
        $user->is_active = $_POST['is_active'];
        $user->role_id = $_POST['role_id'];
        self::view('new_user');
        if($user->save())
            $this->view('dashboard',['success'=>'data inserted successful']);
        else 
            $this->view('dashboard',['danger'=>'can not add data']);
    }

    public function register(){
        self::view('new_user');
    }
    
    public function delete(){
    }
}
?>