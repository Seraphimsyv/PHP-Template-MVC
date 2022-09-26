<?php

    namespace App\Core\Functions;

    function dump(mixed $data) : void 
    {
      echo "<pre>";
      var_dump($data);
      echo "</pre>";
    }