<?php

namespace App\Models\Cage;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $cage
 * @property int $number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye whereCage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CageEye whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CageEye extends Model
{
    protected $fillable = [
        'cage_id',
        'number',
    ];

    public function cage(): BelongsTo
    {
        return $this->belongsTo(Cage::class);
    }
}
