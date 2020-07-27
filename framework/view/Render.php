<?php

namespace Framework\View;

class Render{

    public static function view(string $view) {
        $viewsConfig = include __DIR__ . '/../../config/views.php';

        $view = new View($view, $viewsConfig["path"]);
        $view->renderize();
    }
}
