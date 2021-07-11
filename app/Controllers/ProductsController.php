<?php

namespace App\Controllers;

use Framework\Controller;
use Framework\View\Render;
use App\Models\ProductModel;


class ProductsController extends Controller
{
    private $message = "Mensaje de prueba por parametros";

    public function index(array $parameters = null)
    {
        $productModel = new ProductModel();
        $products = $productModel->getAll();
        $message = $this->message;

        Render::view('products', compact('products','message'));
    }

    public function get(array $parameters)
    {
        $productModel = new ProductModel();
        $product = $productModel->get($parameters["id"]);
        $message = $this->message;

        Render::view("products", compact('product', 'message'));
    }
}