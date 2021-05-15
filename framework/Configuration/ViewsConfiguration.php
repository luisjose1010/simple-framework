<?php

namespace Framework\Configuration;

class ViewsConfiguration
{
    public static function getPath(){
        $configuration = include __DIR__ . '/../../config/views.php';
        return $configuration["path"];
    }
}
