<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
    $route->get('/', function(){
        include __DIR__.'/../resources/views/inicio.php';
    });

    $route->get('/productos', function(){
        include __DIR__.'/../resources/views/productos.php';
    });
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
        call_user_func($handler);
        break;
}
