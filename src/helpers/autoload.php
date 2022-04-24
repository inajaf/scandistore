<?php

spl_autoload_register(static function ($class) {
    require_once(dirname(__DIR__, 1) . '/src/' . $class . '.php');
});