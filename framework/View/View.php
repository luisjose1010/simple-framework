<?php

namespace Framework\View;

use Framework\Configuration\ViewsConfiguration;
use Exception;



class View {

    protected $view;
    protected $viewsPath;
    protected $viewParameters;
    protected $renderEnable = false;

    public function renderize(){
        $this->renderEnable = true;
    } 

    function __construct(string $view, array $viewParameters = null) {
        $this->viewsPath = ViewsConfiguration::getPath();
        $this->viewParameters = $viewParameters;
        
        if(file_exists($this->viewsPath . $view . '.php')){
            $this->view = $view;
        } else{
            throw new Exception("View not found");
        }
    }

    function __destruct() {
        if($this->renderEnable){
            if(isset($this->viewParameters)){
                extract($this->viewParameters);
            }
            
            include $this->viewsPath . $this->view . '.php';
        }
    }
}
