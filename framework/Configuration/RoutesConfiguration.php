<?php

namespace Framework\Configuration;

class RoutesConfiguration
{
    public static function getPath(){
        $configuration = include __DIR__ . '/../../config/routes.php';
        return $configuration["path"];
    }
}
