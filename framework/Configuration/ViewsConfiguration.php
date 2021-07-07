<?php

namespace Framework\Configuration;

class ViewsConfiguration
{
    public static function getPath(){
        $configuration = include __DIR__ . '/../../config/views.php';
        return $configuration["path"];
    }

    public static function getNotFoundError(){
        $configuration = include __DIR__ . '/../../config/views.php';
        return $configuration["notFoundErrorView"];
    }
}
