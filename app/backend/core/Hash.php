<?php

class Hash
{
    public static function make($string)
    {
        return hash(Config::get('hash/algo_name'), $string . Hash::salt());
    }

    public static function salt()
    {
        $saltLength = Config::get('hash/salt'); // Assuming config returns the desired length
        return random_bytes($saltLength);
    }

    public static function unique()
    {
        return self::make(uniqid());
    }
}
