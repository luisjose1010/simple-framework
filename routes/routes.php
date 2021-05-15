<?php

use Framework\Routing\Routes;
use Framework\View\Render;

Routes::get('/', function () {
    Render::view("inicio");
});

Routes::get('/productos[/{id:\d+}]', function ($parameters) {
    $parameters["message"] = "mensaje por parametro de vista";
    Render::view("productos", $parameters);
});
