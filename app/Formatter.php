<?php


namespace App;


class Formatter
{
    public static function moneyFormat(int $price): string
    {
        return '$' . number_format($price/ 100);
    }

}
