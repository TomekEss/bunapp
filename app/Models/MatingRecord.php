<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatingRecord extends Model
{
    protected $fillable = [
        'male_id',
        'female_id',
        'mating_date',
        'type',
        'note',
        'number_of_knockdown',
    ];
}
