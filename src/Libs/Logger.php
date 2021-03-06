<?php

namespace Hydra\Exchange\Libs;

class Logger
{
    private static $messages = [];

    public static function write($message)
    {
        self::$messages[] = $message;
    }

    public static function list()
    {
        return self::$messages;
    }
}