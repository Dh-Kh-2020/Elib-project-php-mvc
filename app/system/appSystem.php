<?php
namespace coding\app\system;
use coding\app\config\DB;

class AppSystem {

    public Request $request;
    public Response $response;
    public Router $router;
    public static AppSystem $appSystem;
    public static DB $db;

    function __construct(array $dbConfig){

        self::$db = new DB($dbConfig);
        self::$appSystem = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request);
    }

    public function start(){
        $this->router->executeRoute();
    }
}