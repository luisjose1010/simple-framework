<?php

use Framework\Routing\Routes;
use Framework\Configuration\ControllerConfiguration;

$routesConfig = include __DIR__ . '/../config/routes.php';
require $routesConfig["path"];

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $routeCollector) {
    foreach (Routes::getRoutes() as $route) {
        $routeCollector->addRoute($route->getMethod(), $route->getRoutePattern(), $route->getClousure());
    }
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo 'Error: No se encuentra la ruta especificada';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo 'Error: Metodo incorrecto';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $parameters = array($routeInfo[2]);

        if(!is_callable($handler)) {
            list($class, $method) = explode("@", $handler, 2);
            $class = ControllerConfiguration::getNamespace() . $class;

            call_user_func_array(array(new $class, $method), $parameters);
        } else {
            call_user_func($handler, $parameters[0]);
        }
        break;
}
