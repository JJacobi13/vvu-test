<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vacancy
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $quantity
 * @property int $points
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vacancy whereUpdatedAt($value)
 */
class Vacancy extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'points',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
