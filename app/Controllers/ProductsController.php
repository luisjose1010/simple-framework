<?php

namespace App\Controllers;

use Framework\Controller;
use Framework\View\Render;

class ProductsController extends Controller
{
    public function index(array $parameters = null)
    {
        Render::view('productos');
    }

    public function get(array $parameters)
    {
        $parameters["message"] = "Mensaje de prueba por parametros";
        Render::view("productos", $parameters);
    }
}