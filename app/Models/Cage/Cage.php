<?php

namespace App\Models\Cage;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Cage extends Model
{
    protected $fillable = [
      'name'
    ];


}
