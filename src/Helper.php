<?php

class Helper
{
    public static function prettyPrint($data): void
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}