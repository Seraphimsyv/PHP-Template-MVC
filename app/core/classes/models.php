<?php

    namespace App\Core\Classes;

    abstract class Models
    {
        protected function connector() : mixed
        {
            return new \App\Core\Classes\Database();
        }
    }