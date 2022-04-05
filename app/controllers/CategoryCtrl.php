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
        $category->image=$imageName!=null?$imageName:"default.png";
        $category->is_active = isset($_POST['category_is_active'])?isset($_POST['category_is_active']):0;
        if($category->save())
            self::view('new-category',['success'=>'data inserted successful']);
        else 
            self::view('new-category',['danger'=>'can not add data']);
    }
    
    public function editCategory(){
        self::view('edite-category');
    }

    public function updateCategory($params=[]){
        $category = $this->getObject();
        $category->update($_POST['id']);
        $this->redirect('/admin/categories');
    }

    public function remove(){
        $category = new Category();
        $category->delete($params['id']);
        $this->redirect('/admin/categories');
    }

    public function getObject(){
        $category = new Category();  
        $category->name=$_POST['category_name'];
        $imageName=$this->uploadFile($_FILES['image']);
        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];
        return $category;
    }

    public static function uploadFile(array $imageFile): string
    {
        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);
            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../public/images/' . $imageName;
            move_uploaded_file($imageFile['tmp_name'], $imagePath);
            return $imageName;
        }
        return null;
    }
}
?>