<?php

namespace Framework\Configuration;

class ControllersConfiguration
{
    public static function getNamespace(){
        $configuration = include __DIR__ . '/../../config/controllers.php';
        return $configuration["namespace"];
    }
}
