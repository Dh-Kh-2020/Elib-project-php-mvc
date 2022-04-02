<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersCtrl;
use coding\app\controllers\HomeCtrl;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '\..');
$dotenv->load();

$config=array(
    'servername'=>$_ENV['DB_SERVER_NAME'],
    'dbname'=>$_ENV['DB_NAME'],
    'dbpass'=>$_ENV['DB_PASSWORD'],
    'username'=>$_ENV['DB_USERNAME']
);
$app=new AppSystem($config);       // equals to $app = new AppSystem();

// ========== MAIN PAGES ROUTE ============
Router::get('/index', [HomeCtrl::class, 'index']);
Router::get('/category', [HomeCtrl::class, 'category']);
Router::get('/cart', [HomeCtrl::class, 'cart']);
Router::get('/details', [HomeCtrl::class, 'details']);
Router::get('/admin/dashboard', [HomeCtrl::class, 'dashIndex']);

// ========== USERE ROUTE ================
Router::get('/admin/users', [UsersCtrl::class, 'listAllUsers']);
Router::get('/admin/new_user', [UsersCtrl::class, 'createUser']);
Router::post('/admin/new_user', [UsersCtrl::class, 'saveUser']);
// Router::get('/register', [UsersCtrl::class, 'register']);

// ========== ROLE ROUTE ================
Router::get('/admin/roles', [RolesCtrl::class, 'listAllRoles']);
Router::get('/admin/new_role', [RolesCtrl::class, 'createRole']);
Router::post('/admin/new_role', [RolesCtrl::class, 'saveRole']);

$app->start();