<?php

    namespace App\Core\Interfaces;

    interface ISession
    {
        public static function set($key, $value) : void;

        public static function get($key) : mixed;

        public static function del($key) : void;

        public static function clear() : void;
    }