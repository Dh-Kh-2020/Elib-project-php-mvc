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
}