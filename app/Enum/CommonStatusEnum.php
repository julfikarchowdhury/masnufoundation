<?php

namespace App\Enum;

enum CommonStatusEnum: int
{
    case Pending = 2;
    case Active = 1;
    case Inactive = 0;

    public static function fromName(string $name)
    {
        return constant("self::$name");
    }
}