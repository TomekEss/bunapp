<?php

namespace App\Models\Cage;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cage whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cage\CageEye> $eyes
 * @property-read int|null $eyes_count
 * @mixin \Eloquent
 */
class Cage extends Model
{
    protected $fillable = [
      'name'
    ];

    public function eyes(): HasMany
    {
        return $this->hasMany(CageEye::class, 'cage_id', 'id');
    }

}
