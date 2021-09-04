<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitadelMonsterSquad extends Model
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
        'fourth_unit',
        'fourth_unit_count',
        'fifth_unit',
        'fifth_unit_count',
        'sixth_unit',
        'sixth_unit_count',
    ];

    protected $with = [
        'firstMonster',
        'secondMonster',
        'thirdMonster',
        'fourthMonster',
        'fifthMonster',
        'sixthMonster',
        'seventhMonster'
    ];

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

    public function fourthMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'fourth_unit');
    }

    public function fifthMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'fifth_unit');
    }

    public function sixthMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'sixth_unit');
    }

    public function seventhMonster()
    {
        return $this->hasOne('\App\Models\Monster', 'id', 'seventh_unit');
    }
}
