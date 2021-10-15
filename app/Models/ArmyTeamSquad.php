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
        'monster_id',
        'army_bonus_id',
        'published',
        'num_team',
    ];

    protected $with = [
        'monster',
        'armyBonus',
    ];

    public function uesr()
    {
        return $this->belongsTo(User::class);
    }

    public function monster()
    {
        return $this->hasOne(Monster::class, 'id', 'monster_id');
    }

    public function armyBonus()
    {
        return $this->hasOne(ArmyBonus::class, 'id', 'army_bonus_id');
    }
}
