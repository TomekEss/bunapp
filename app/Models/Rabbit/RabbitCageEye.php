<?php

namespace App\Models\Rabbit;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class RabbitCageEye extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'rabbit_id',
        'cage_eye_id',
        'date_of_residence',
    ];
}
