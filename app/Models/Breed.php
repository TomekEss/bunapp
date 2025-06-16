<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property bool $default
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder<static>|Breed newModelQuery()
 * @method static Builder<static>|Breed newQuery()
 * @method static Builder<static>|Breed query()
 * @method static Builder<static>|Breed user()
 * @method static Builder<static>|Breed whereCreatedAt($value)
 * @method static Builder<static>|Breed whereDefault($value)
 * @method static Builder<static>|Breed whereId($value)
 * @method static Builder<static>|Breed whereName($value)
 * @method static Builder<static>|Breed whereUpdatedAt($value)
 * @method static Builder<static>|Breed whereUserId($value)
 * @mixin \Eloquent
 */
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
