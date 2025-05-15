<?php

namespace App\Models\Rabbit;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rabbit extends Model
{
    use SoftDeletes;
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function mother(): BelongsTo
    {
        return $this->belongsTo(Rabbit::class, 'mother_id');
    }

    public function father(): BelongsTo
    {
        return $this->belongsTo(Rabbit::class, 'father_id');
    }
}
