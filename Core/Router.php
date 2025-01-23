<?php

namespace Core;

class Router
{
    public function __construct()
    {
    }

    public function routeStart()
    {
        $thisUrl = "http://localhost/mvc-architect/app/user";

        // URL'i parçala
        $path = parse_url($thisUrl, PHP_URL_PATH);
        $segments = explode('/', trim($path, '/'));

        // Sınıf adı ve metot adı belirle
        $class = ucfirst(strtolower($segments[2] ?? 'index')) . 'Controller';
        $function = ($segments[3] ?? 'index') . 'Action';

        // Namespace ile tam sınıf adı
        $classNamespace = "App\\Controller\\{$class}";

        if (class_exists($classNamespace)) {
            $controller = new $classNamespace();
            if (method_exists($controller, $function)) {
                $controller->$function();
            } else {
                echo "Method {$function} not found in class {$classNamespace}";
            }
        } else {
            echo "Class {$classNamespace} not found";
        }
    }
}
