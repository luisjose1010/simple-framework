<?php

namespace Framework;

abstract class Controller
{
    public abstract function index(array $parameters);

    public static function redirect($route){
        echo "<script>window.location.href = '$route'</script>";
        exit();
    }
}