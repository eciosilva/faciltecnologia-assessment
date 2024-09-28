<?php

namespace App\Helper;

abstract class VarDumper
{
    public static function dump(mixed $var): void
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}