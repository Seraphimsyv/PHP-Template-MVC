<?php

    namespace App\Core\Classes;

    abstract class Views
    {
        public string $template;
        public string $content;

        public function setTemplate(string $template) : void
        {
            $this->template = TEMPLATES_BASES . $template;
        }

        public function setContent(string $content) : void
        {
            $this->content = TEMPLATES_PAGES . $content;
        }

        public function render(array $data = []) : void
        {
            include $this->template;
        }
    }