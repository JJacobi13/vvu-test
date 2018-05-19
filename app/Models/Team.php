<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team
 *
 * @property-read \App\Models\Team $team
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Vacancy[] $vacancies
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $category
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Team whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Team whereUpdatedAt($value)
 */
class Team extends Model
{
    protected $fillable = [
        'name',
        'category',
    ];

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function getPoints()
    {
        return $this->join('users', 'users.team_id', 'teams.id')
            ->join('user_vacancy', 'user_vacancy.user_id', 'users.id')
            ->join('vacancies', 'user_vacancy.vacancy_id', 'vacancies.id')
            ->where('teams.id', $this->id)
            ->sum('vacancies.points');
    }
}
