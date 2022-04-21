<?php

class Helper
{
    public static function prettyPrint($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}