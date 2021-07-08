<?php

namespace Framework\Routing;

use Framework\Configuration\ControllersConfiguration;
use Framework\Configuration\ViewsConfiguration;
use Framework\View\Render;
use FastRoute\Dispatcher;

class Routes{

    protected static $routes = array();


    public static function addRoute(Route $route) {
        array_push(self::$routes, $route);
    }

    public static function get(string $routePattern, $clousure) {
        array_push(self::$routes, new Route($routePattern, $clousure, 'GET'));
    }

    public static function post(string $routePattern, $closure) {
        array_push(self::$routes, new Route($routePattern, $closure, 'POST'));
    }

    public static function getRoutes(){
        return self::$routes;
    }
    

    protected $routeInfo;

    public function initiateRouting(){
        switch ($this->routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                Render::view(ViewsConfiguration::getNotFoundError());
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                echo 'Error: Metodo incorrecto';
                break;
            case Dispatcher::FOUND:
                $handler = $this->routeInfo[1];
                $parameters = array($this->routeInfo[2]);
        
                if(!is_callable($handler)) {

                    // Si la función está en forma de un String del tipo 'controlador@metodo'
                    list($class, $method) = explode("@", $handler, 2);
                    $class = ControllersConfiguration::getNamespace() . $class;
        
                    call_user_func_array(array(new $class, $method), $parameters);
                } else if(is_array($handler)) {

                    // Si la función está en forma de un array del controlador y el método
                    call_user_func([new $handler[0], $handler[1]], $parameters[0]);
                } else{
                    
                    // Si simplemente es una función de tipo Clousure
                    call_user_func($handler, $parameters[0]);
                }
                break;
        }
    }

    public function __construct($routeInfo)
    {
        $this->routeInfo = $routeInfo;
    }
}
