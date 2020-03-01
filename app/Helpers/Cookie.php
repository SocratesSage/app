<?php

namespace App\Helpers;

class Cookie
{

    public static function exists(string $name)
    {
        return array_key_exists($name, $_COOKIE);
    }

    public static function put(string $name, string $value, int $time = 60 * 60 * 24 * 130, $domain = '/')
    {
        setcookie($name, $value, time() + $time, $domain);
    }

    public static function get(string $name)
    {
        return self::exists($name) ? $_COOKIE[$name] : null;
    }

    public static function destroy(string $name)
    {
        if (self::exists($name)) {
            setcookie($name, '', time() - 3600, '/');
            unset($_COOKIE[$name]);
        }
    }

}