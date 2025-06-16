<?php

namespace App\Models\Rabbit;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property int $rabbit_id
 * @property int $cage_eye_id
 * @property string|null $date_of_residence
 * @property string|null $moving_out
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereCageEyeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereDateOfResidence($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereMovingOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereRabbitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RabbitCageEye withoutTrashed()
 * @mixin \Eloquent
 */
class RabbitCageEye extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'rabbit_id',
        'cage_eye_id',
        'date_of_residence',
    ];
}
