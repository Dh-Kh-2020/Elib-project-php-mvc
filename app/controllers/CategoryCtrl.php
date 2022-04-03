<?php
namespace coding\app\controllers;
use coding\app\models\Category;

class CategoryCtrl extends Controller{

    public function listAllCategories(){
        $categories = new Category();
        $allCategories = $categories->getAll();

        self::view('categories-list', $allCategories);
    }

    public function createCategory(){
        self::view('new-category');
    }
    
    // Insert new category into DB
    public function saveCategory(){
        $category = new Category();
        $category->name = $_POST['categoryname'];
        $imageName = $this->uploadFile($_FILES['categoryicon']);
        // $category->image = ;
        $category->is_active = isset($_POST['category_is_active'])?isset($_POST['category_is_active']):0;
        if($category->save())
            self::view('new-category',['success'=>'data inserted successful']);
        else 
            self::view('new-category',['danger'=>'can not add data']);
    }
    
    public function editCategory(){
        if($_SERVER['RQUEST_METHOD'] === 'GET'){
            $category = new Category();
            
        }
    }

    public function delete(){
    }
}
?>