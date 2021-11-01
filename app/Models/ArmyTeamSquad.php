<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArmyTeamSquad extends Model
{
    use HasFactory, SoftDeletes;

    protected $filable = [
        'user_id',
        'squad_monster_id',
        // 'army_bonus_id',
        'published',
        'num_team',
    ];

    protected $with = [
        // 'user',
        // 'monster',
        // 'armyBonus',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function monster()
    {
        return $this->hasOne(SquadMonster::class, 'id', 'squad_monster_id');
    }

    public function armyBonus()
    {
        return $this->hasMany(ArmyBonus::class);
    }
}
