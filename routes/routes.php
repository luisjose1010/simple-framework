<?php

use Framework\Routing\Routes;
use Framework\View\Render;

Routes::get('/', function () {
    Render::view("inicio");
});

Routes::get('/productos', function () {
    Render::view("productos");
});
