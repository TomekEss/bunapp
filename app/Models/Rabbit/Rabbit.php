<?php

namespace App\Models\Rabbit;

use App\Enums\Rabbit\RabbitGenderEnum;
use App\Models\Breed;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property RabbitGenderEnum|null $gender
 * @property int $user_id
 * @property int|null $mother_id
 * @property int|null $father_id
 * @property int|null $breed_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $birthday
 * @property-read Breed|null $breed
 * @property-read Rabbit|null $father
 * @property-read Rabbit|null $mother
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereFatherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereMotherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Rabbit withoutTrashed()
 * @mixin \Eloquent
 */
class Rabbit extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'user_id',
        'mother_id',
        'father_id',
        'gender',
        'breed_id',
        'photo_path',
        'birthday',
        'note',
    ];

    protected $casts = [
      'gender' => RabbitGenderEnum::class,
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

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class, 'breed_id');
    }
    #[Scope]
    protected function allFemale(Builder $query): void
    {
        $query->where('gender', '=', 2);
    }

    #[Scope]
    protected function allMale(Builder $query): void
    {
        $query->where('gender', '=', 1);
    }
}
