<?php
namespace app\core;

class App
{
    private $routes = [];

    public function addRoute($url, $handler)
    {
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    public function __construct()
    {
        $url = $_GET['url'];

        $routes = ['Main/index' => 'MainController,index',
                    'Main' => 'MainController,index',
                   'Main/about_us' => 'MainController,about_us',
                'Contact/index' => 'ContactController,index',
                'Contact/read' => 'ContactController,see_message',
                'Count/index' => 'CountController,index',
                'ContactController/complete_registration' => 'ContactController,complete_registration',
            ];

        foreach ($routes as $routeUrl => $controllerMethod) {
            if($url == $routeUrl){
                [$controller,$method]=explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\'.$controller;
                $controller = new $controller();
                $controller->$method();
                break;
            }
        }

       
    }
}