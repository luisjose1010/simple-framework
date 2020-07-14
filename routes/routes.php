<?php

use Framework\Routing\Routes;

Routes::get('/', function () {
    include __DIR__.'/../resources/views/inicio.php';
});

Routes::get('/productos', function () {
    include __DIR__.'/../resources/views/productos.php';
});
