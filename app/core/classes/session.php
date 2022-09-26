<?php

    namespace App\Core\Classes;

    class Session implements \App\Core\Interfaces\ISession
    {        
        public static function set($key, $value) : void
        {
            $_SESSION[$key] = $value;
        }

        public static function get($key) : mixed
        {
            if(isset($_SESSION[$key]))
                return $_SESSION[$key];
            return false;
        }

        public static function del($key) : void
        {
            unset($_SESSION[$key]);
        }

        public static function clear() : void
        {
            $_SESSION = [];
        }
    }