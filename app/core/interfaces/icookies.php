<?php

    namespace App\Core\Interfaces;

    interface ICookies
    {
        public static function set($key, $value) : void;

        public static function get($key) : mixed;

        public static function del($key) : void;
    }