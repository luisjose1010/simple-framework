<?php

namespace Framework\View;

class Render{

    public static function view(string $view) {
        $view = new View($view);
        $view->renderize();
    }
}
