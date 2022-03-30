<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersCtrl;
use coding\app\controllers\HomeCtrl;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '\..');
$dotenv->load();

$app = new AppSystem;       // equals to $app = new AppSystem();

// ========== MAIN WEB SITE ROUTE ============
Router::get('/index', [HomeCtrl::class, 'index']);
Router::get('/category', [HomeCtrl::class, 'category']);
Router::get('/cart', [HomeCtrl::class, 'cart']);
Router::get('/details', [HomeCtrl::class, 'details']);

// ========== DASHBOARD ROUTE ================
Router::get('/users', [UsersCtrl::class, 'show']);
// Router::get('/register', [UsersCtrl::class, 'register']);
Router::get('/books', function(){
    echo "books route path";
});
Router::post('/users', [UsersCtrl::class, 'show']);

$app->start();