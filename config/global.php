<?php

    $debug_mode = "DEV";

    if($debug_mode == "PROD")
    {
        require_once "production.php";
    } else {
        require_once "development.php";
    }

    $session_mode = true;

    if($session_mode == true) session_start();

    const ASSETS_JS = "assets" . DIRECTORY_SEPARATOR . "js" . DIRECTORY_SEPARATOR;
    const ASSETS_IMG = "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
    const ASSETS_CSS = "assets" . DIRECTORY_SEPARATOR . "css" . DIRECTORY_SEPARATOR;

    const TEMPLATES_BASES = "templates" . DIRECTORY_SEPARATOR . "bases" . DIRECTORY_SEPARATOR;
    const TEMPLATES_PAGES = "templates" . DIRECTORY_SEPARATOR . "pages" . DIRECTORY_SEPARATOR;
    const TEMPLATES_BLOCKS = "templates" . DIRECTORY_SEPARATOR . "blocks" . DIRECTORY_SEPARATOR;

    spl_autoload_register(
        function($class) : void
        {
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            require strtolower($path) . '.php';
        }
    );

    require_once "app" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "functions" . DIRECTORY_SEPARATOR . "loader.php";
    require_once "app" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "interfaces" . DIRECTORY_SEPARATOR . "loader.php";
    require_once "app" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "types" . DIRECTORY_SEPARATOR . "loader.php";
    require_once "app" . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . "routes" . DIRECTORY_SEPARATOR . "loader.php";