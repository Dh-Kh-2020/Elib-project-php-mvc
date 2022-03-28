<?php
use coding\app\system\AppSystem;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app = new AppSystem;       // equals to $app = new AppSystem();

echo $_ENV['DB_NAME'];