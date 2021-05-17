<?php

use Framework\Routing\Routes;

Routes::get('/', 'HomeController@index');

Routes::get('/productos', 'ProductsController@index');

Routes::get('/productos/{id}', 'ProductsController@get');
