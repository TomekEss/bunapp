<?php

namespace App\Enums\Rabbit;

enum RabbitGenderEnum: int
{
    case Male = 1;
    case Female = 2;
    case Unknown = 3;

    public function getLabel(): string
    {
        return match ($this) {
            self::Male => 'Male',
            self::Female => 'Female',
            self::Unknown => 'Unknown',
        };
    }
}
