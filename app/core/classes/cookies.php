<?php

    namespace App\Core\Classes;

    class Cookies implements \App\Core\Interfaces\ICookies
    {
        public static function set($key, $value) : void
        {
            setcookie($key, $value, time() + (3600 * 24));
        }

        public static function get($key) : mixed
        {
            if(isset($_COOKIE[$key])) return $_COOKIE[$key];
            return false;   
        }

        public static function del($key) : void
        {
            setcookie($key, "", time() - (3600 * 24));
        }
    }