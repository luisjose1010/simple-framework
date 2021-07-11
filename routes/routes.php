<?php

use Framework\Routing\Routes;

Routes::get('/', [App\Controllers\HomeController::class, 'index']);

Routes::get('/productos', 'ProductsController@index');

Routes::get('/productos/{id}', 'ProductsController@get');
