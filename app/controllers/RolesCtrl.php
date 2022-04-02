<?php
namespace coding\app\controllers;
use coding\app\models\Role;

class RolesCtrl extends Controller{

    public function listAllRoles(){
        $roles = new Role();
        $allRoles = $roles->getAll();

        self::view('roles-list', $allRoles);
    }

    public function createRole(){
        self::view('new-role');
    }
    
    // Insert new admin into DB
    public function saveRole(){
        $role = new Role();

        if($role->save())
            self::view('new-role',['success'=>'data inserted successful']);
        else 
            self::view('new-role',['danger'=>'can not add data']);
    }

    public function delete(){
    }
}
?>