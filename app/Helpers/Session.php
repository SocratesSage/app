<?php

namespace App\Helpers;

class Session
{

    public static function start()
    {
        session_start();
    }

    public static function exists(string $name)
    {
        return array_key_exists($name, $_SESSION);
    }

    public static function put(string $name, $data)
    {
        $_SESSION[$name] = $data;
    }

    public static function get(string $name)
    {
        return self::exists($name) ? $_SESSION[$name] : null;
    }

    public static function destroy(string $name)
    {
        unset($_SESSION[$name]);
    }

}