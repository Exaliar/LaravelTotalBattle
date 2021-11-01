<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class ArmyBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'army_id',
        'army_team_squad_id',
        'number_units',
        'bonus_ap',
        'bonus_hp'
    ];

    protected $with = [
        // 'army',
        // 'armyTeamSquad'
    ];

    public function army()
    {
        return $this->hasOne(Army::class, 'id', 'army_id');
    }

    public function armyTeamSquad()
    {
        return $this->belongsTo(ArmyTeamSquad::class);
    }
}
