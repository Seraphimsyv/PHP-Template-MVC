<?php

    namespace App\Core\Classes;

    class Router
    {

        public static array $actions = [
            "GET" => [],
            "POST" => [],
            "PUT" => [],
            "DELETE" => []
        ];

        public static function dispatcher() : void
        {
            $dispatcher_status = false;

            foreach(self::$actions as $actions_method => $url_actions)
            {

                foreach($url_actions as $url_pattern => $actions)
                {
                    if(self::request()::method() == $actions_method)
                    {
                        preg_match($url_pattern, self::request()::url(), $match);
                        if(self::request()::url() == $url_pattern or $match != NULL)
                        {
                            $controller = new $actions[0]();
                            
                            if(method_exists($controller, $actions[1]))
                            {
                                $dispatcher_status = true;
                                $method = $actions[1];
                                exit($controller->$method(self::request()));
                            } else {
                                $controller = new \App\Controllers\Controller_Error();
                                exit($controller->notFound(self::request()));
                            }
                        }
                    }
                }

            }

            if($dispatcher_status == false)
                $controller = new \App\Controllers\Controller_Error();
                exit($controller->notFound(self::request()));
        }

        public static function request() : \App\Core\Interfaces\IRequest
        {
            return new \App\Core\Classes\Request();
        }

        public static function get(string $url, mixed $action): void
        {
            if(!isset(self::$actions['GET'][$url]))
                self::$actions['GET'][$url] = $action;
        }

        public static function put(string $url, mixed $action): void
        {
            if(!isset(self::$actions['PUT'][$url]))
                self::$actions['PUT'][$url] = $action;
        }

        public static function post(string $url, mixed $action): void
        {
            if(!isset(self::$actions['POST'][$url]))
                self::$actions['POST'][$url] = $action;
        }

        public static function delete(string $url, mixed $action): void
        {
            if(!isset(self::$actions['DELETE'][$url]))
                self::$actions['DELETE'][$url] = $action;
        }
    }