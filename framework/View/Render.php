<?php

namespace Framework\View;

class Render
{
    public static function view(string $view, array $viewParameters = null)
    {
        if (isset($viewParameters)) {
            $view = new View($view, $viewParameters);
            $view->renderize();
        } else {
            $view = new View($view);
            $view->renderize();
         }
    }
}
