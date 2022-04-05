<?php
namespace coding\app\models;
use coding\app\system\AppSystem;

class Model{
    public static $tblName = 'users';

    public function save(): bool{
        $properties = get_object_vars($this);
        $properties = implode(", ", $properties);
        $values = array();
        $columns = array();

        foreach(get_object_vars($this) as $key => $property){
            if($property != self::$tblName){
                $values[] = is_string($property)? "'".$property."'":$property;
                $columns[] = $key;
            }
        }
        $values = implode(", ", $values);
        $columns = implode(", ", $columns);

        $query = "INSERT INTO ".self::$tblName." (".$columns.") VALUES (".$values.")";
        $stmt = AppSystem::$appSystem::$db->conn->prepare($query);
        if($stmt->execute())
            return false;
        
        return false;
    }

    public function getAll(){
        $query = "SELECT * FROM ".self::$tblName;
        $stmt = AppSystem::$appSystem::$db->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName." where id=".$id."";
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function update($id){
        $set=array();
        foreach(get_object_vars($this) as $key=> $property){
            $set[] = $key.'='."'".$property."'";
        }
        $set=implode(",",$set);
        $sql_query="update ".self::$tblName." set ".$set." where ID = ".$id.";";
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
    
    public function delete($id){
        $sql_query="select is_active from ".self::$tblName." where ID = ".$id;
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute()){
            $user=$stmt->fetchObject();
            if($user->is_active==1) $newValue=0;
            else $newValue=1;
        }
        $sql_query = "update ".self::$tblName." set is_active =".$newValue." where id=".$id;
        $stmt=Application::$app->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return true;
        return false;
    }
}