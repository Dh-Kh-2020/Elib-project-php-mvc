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
    
    // Insert new role into DB
    public function saveRole(){
        $role = new Role();
        $role->name = $_POST['rolename'];
        $role->is_active = isset($_POST['role_is_active'])?$_POST['role_is_active']:0;

        if($role->save())
            self::view('new-role',['success'=>'data inserted successful']);
        else 
            self::view('new-role',['danger'=>'can not add data']);
    }

    public function editRole(){
        self::view('edit-role');
    }
    
    public function deleteRole(){
    }
}
?>