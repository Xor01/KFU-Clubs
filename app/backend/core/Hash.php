<?php

class Hash
{
    public static function make($string)
    {
        return hash(Config::get('hash/algo_name'), $string);
    }

    public static function salt()
    {
        $saltLength = Config::get('hash/salt');
        return random_bytes($saltLength);
    }

    public static function unique()
    {
        return self::make(uniqid());
    }
}
