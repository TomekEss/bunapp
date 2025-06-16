<?php

namespace App\Models;

use App\Models\Rabbit\Rabbit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property int $rabbit_id
 * @property int $type_id
 * @property \Illuminate\Support\Carbon $date
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Rabbit $rabbit
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereRabbitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vaccination whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
