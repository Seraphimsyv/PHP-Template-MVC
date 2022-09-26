<?php

    namespace App\Core\Functions;

    function redirect(string $location, int $code) : void
    {
        header(header : "Location: " . $location, http_response_code : $code);
    }