<?php
namespace coding\app\system;

class Router{

    public static $request; 
    public static $response;
    protected static $routes = array();

    public function __construct($request){
        self::$request = $request;
    }

    public static function get($url, $callback){
        self::$routes['GET'][$url] = $callback;
    }

    public static function post($url, $callback){
        self::$routes['POST'][$url] = $callback;
    }

    public static function put(){

    }

    public static function delete(){

    }

    public static function executeRoute(){

        $route = self::$request->getRoute();
        $method = self::$request->getRequestMethod();

        $callback = self::$routes[$method][$route];

        if(isset($callback)){
            if(is_array($callback)){
                $callback[0] = new $callback[0];
            }
            call_user_func($callback);
        }
        else{
            echo 'page not found';
        }
    }

    public static function view($view /*, $params */){
        require_once __DIR__ . "/../views/$view.php";
    }
}