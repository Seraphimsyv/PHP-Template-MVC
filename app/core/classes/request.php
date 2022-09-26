<?php

    namespace App\Core\Classes;

    class Request implements \App\Core\Interfaces\IRequest
    {
        public static function url() : string
        {
            if(str_contains($_SERVER['REQUEST_URI'], "?"))
                return explode("?", $_SERVER['REQUEST_URI'])[0];
            return $_SERVER['REQUEST_URI'];
        }

        public static function method() : string
        {
            return $_SERVER['REQUEST_METHOD'];
        }

        public static function query() : array
        {
            return $_REQUEST;
        }
        
        public static function host() : string 
        {
            return $_SERVER['HTTP_HOST'];
        }

        public static function http_referer() : string
        {
            return $_SERVER['HTTP_REFERER'];
        }

        public static function timestamp() : string 
        {
            return $_SERVER['REQUEST_TIME'];
        }

        public static function cookies() : \App\Core\Interfaces\ICookies
        {
            return new \App\Core\Classes\Cookies();
        }

        public static function session() : \App\Core\Interfaces\ISession
        {
            return new \App\Core\Classes\Session();
        }

        public function __serialize() : array
        {
            return [
                "url" => self::url(),
                "method" => self::method(),
                "query" => self::query(),
                "host" => self::host(),
                "http_referer" => self::http_referer(),
                "timestamp" => self::timestamp(),
                "cookies" => serialize(self::cookies()),
                "session" => serialize(self::session())
            ];
        }
    }