<?php

namespace App\Models\Rabbit;

use Illuminate\Database\Eloquent\Model;

class Rabbit extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'mother_id',
        'father_id',
        'gender',
        'breed',
        'photo_path',
        'note',
    ];
}
