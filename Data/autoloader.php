<?php
    spl_autoload_register(function($classname) {
        $file = '/var/www/datery/' . str_replace("\\","/", $classname) . '.php';
        if (file_exists($file)) {
            include $file;
        }
    });
