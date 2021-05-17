<?php

namespace Framework\Configuration;

class ControllerConfiguration
{
    public static function getNamespace(){
        $configuration = include __DIR__ . '/../../config/controller.php';
        return $configuration["namespace"];
    }
}