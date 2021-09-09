<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monster extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'monsters';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filable = [
        'lvl',
        'name',
        'first_type',
        'second_type',
        'third_type',
        'strength',
        'health',
        'first_bonus',
        'first_bonus_who',
        'second_bonus',
        'second_bonus_who',
        'third_bonus',
        'third_bonus_who',
        'graphics'
    ];

    public function squadMonster()
    {
        return $this->belongsTo(SquadMonster::class);
    }

    public function armyTeamSquad()
    {
        return $this->belongsTo(ArmyTeamSquad::class);
    }
}
