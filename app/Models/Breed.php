<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = [
        'user_id',
        'default',
        'name'
    ];

    protected $casts = [
        'default' => 'boolean',
    ];

    public function scopeUser($query)
    {
        return $query->where('user_id', auth()->id())->orWhere('default', true);
    }
}
