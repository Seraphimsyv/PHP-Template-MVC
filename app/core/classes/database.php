<?php

    namespace App\Core\Classes;

    class Database
    {
        public function __construct()
        {
            return new \mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
        }
    }