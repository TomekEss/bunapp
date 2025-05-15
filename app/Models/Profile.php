<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'nick',
        'avatar',
        'is_active'
    ];

    protected $casts = [
      'is_active' => 'boolean',
    ];

    public function scopeActive(Builder $builder): Builder
    {
        return $builder->where('is_active', true);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
