<?php

function autoloader($class): void
{
    $file = dirname(__DIR__, 1) . "/" . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloader');