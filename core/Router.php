<?php
class Router{
    public  $routes=[
        'GET' => [],
        'POST' => []
    ];
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;

    }

    public function post($uri,$controller){

        $this->routes['POST'][$uri]=$controller;

    }

    public function direct($uri,$requestType)
    {
        if(array_key_exists($uri,$this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }
        else{
            echo "<img style='width: 100%; height: 100%' src='http://www.404notfound.fr/assets/images/pages/img/espnza.jpg'>";
            header( "refresh:3; /" );
            die();
        }

    }
}