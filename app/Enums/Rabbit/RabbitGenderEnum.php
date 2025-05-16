<?php

namespace App\Enums\Rabbit;

enum RabbitGenderEnum: int
{
    case Male = 1;
    case Female = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::Male => 'Samiec',
            self::Female => 'Samica',
        };
    }
}
