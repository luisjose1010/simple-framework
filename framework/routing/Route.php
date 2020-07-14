<?php

namespace Framework\Routing;

class Route {
    
    protected $routePattern;
    protected $clousure;
    protected $method;


    public function getRoutePattern() {
        return $this->routePattern;
    }

    public function getClousure() {
        return $this->clousure;
    }

    public function getMethod() {
        return $this->method;
    }


    function __construct($routePattern, $clousure, $method) {
        $this->routePattern = $routePattern;
        $this->clousure = $clousure;
        $this->method = $method;
    }
}
