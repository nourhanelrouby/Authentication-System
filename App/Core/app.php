<?php
namespace MVC\Core;

class app
{
    private $controller = "homecontroller";
    private $method = "index";
    private $parms = [];

    public function __construct()
    {
        $this->URL();
        $this->RENDER();
    }

    private function URL()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode('/', $_SERVER['QUERY_STRING']);
            // Controller
            (isset($url[0])) ? $this->controller = $url[0] . "controller" : "homecontroller";
            // Method
            (isset($url[1])) ? $this->method = $url[1] : "index";
            unset($url[0], $url[1]);
            $this->parms = array_values($url);
        } else {
            $this->controller = "homecontroller";
            $this->method = "index";
            $this->parms = [];
        }
    }

    private function RENDER()
    {
        $controller = "MVC\Controllers\\" . $this->controller;
        if (class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->parms);
            } else {
                echo 'Method Not Exist';
            }
        } else {
            echo 'Class Not Exist';
        }
    }
}