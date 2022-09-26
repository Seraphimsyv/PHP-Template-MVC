<?php

    namespace App\Controllers;

    class Controller_Main extends \App\Core\Classes\Controller
    {
        public function __construct()
        {
            $this->model = new \App\Models\Model_Main();
            $this->view = new \App\Views\View_Main();
        }

        public function index(\App\Core\Interfaces\IRequest $request) : void
        {
            $this->view->setTemplate("main.php");
            $this->view->setContent("index.php");
            $this->view->render();
        }

        public function notFound(\App\Core\Interfaces\IRequest $request) : void
        {
            $this->view->setTemplate("main.php");
            $this->view->setContent("404.php");
            $this->view->render();
        }
    }