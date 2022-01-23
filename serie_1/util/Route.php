<?php namespace Util;

use Util\View;

class Route
{
    public function __construct()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']); // Break the url into an array
        $nbParam = count($url);

        $namespace = "Controllers";
        $controller = $url[$nbParam - 2];
        $method = $url[$nbParam - 1];
        $class = $namespace."\\".$controller;

        if (! class_exists($class)) {
            return $this->not_found();
        }

        if (! method_exists($class, $method)) {
            return $this->not_found();
        }

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);
    }

    public function not_found()
    {
        $view = new View();
        return $view->render('404');
    }
}