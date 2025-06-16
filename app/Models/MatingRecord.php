<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $male_id
 * @property int $female_id
 * @property string $mating_date
 * @property int $type
 * @property string|null $note
 * @property int $number_of_knockdown
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereFemaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereMaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereMatingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereNumberOfKnockdown($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatingRecord whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
