<?php

namespace Framework\Routing;

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
}