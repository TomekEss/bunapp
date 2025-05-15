<?php

namespace App\Models;

use App\Models\Rabbit\Rabbit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vaccination extends Model
{
    protected $fillable = [
        'rabbit_id',
        'type_id',
        'date',
        'note',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function rabbit(): BelongsTo
    {
        return $this->belongsTo(Rabbit::class);
    }
}
