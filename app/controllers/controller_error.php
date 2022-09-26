<?php

    namespace App\Controllers;

    class Controller_Error extends \App\Core\Classes\Controller 
    {
        public function __construct()
        {
            $this->model = new \App\Models\Model_Error();
            $this->view = new \App\Views\View_Error();
        }

        public function notFound(\App\Core\Interfaces\IRequest $request) : void
        {
            $this->view->setTemplate("error.php");
            $this->view->setContent("404.php");
            $this->view->render();
        }
    }