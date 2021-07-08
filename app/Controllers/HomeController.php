<?php

namespace App\Controllers;

use Framework\Controller;
use Framework\View\Render;

class HomeController extends Controller
{
    public function index($parameters = null)
    {
        Render::view('home');
    }
}