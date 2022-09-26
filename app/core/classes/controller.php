<?php

    namespace App\Core\Classes;

    abstract class Controller
    {
        public $model;
        public $view;

        abstract public function notFound(\App\Core\Interfaces\IRequest $request) : void;
    }