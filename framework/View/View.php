<?php

namespace Framework\View;

use Exception;



class View {

    protected $view;
    protected $viewsPath;
    protected $renderEnable = false;

    public function renderize(){
        $this->renderEnable = true;
    } 

    function __construct(string $view, $viewsPath) {
        $this->viewsPath = $viewsPath;
        
        if(file_exists($this->viewsPath . $view . '.php')){
            $this->view = $view;
        } else{
            throw new Exception("View not found");
        }
    }

    function __destruct() {
        if($this->renderEnable){
            include $this->viewsPath . $this->view . '.php';
        }
    }
}