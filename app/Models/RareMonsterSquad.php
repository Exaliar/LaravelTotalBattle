<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RareMonsterSquad extends Model
{
    use HasFactory;

    protected $filable = [
        'lvl',
        'type',
        'first_unit',
        'first_unit_count',
        'second_unit',
        'second_unit_count',
        'third_unit',
        'third_unit_count',
    ];

    protected $with = ['firstMonster', 'secondMonster', 'thirdMonster'];

    public function firstMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'first_unit');
    }

    public function secondMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'second_unit');
    }

    public function thirdMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'third_unit');
    }
}
