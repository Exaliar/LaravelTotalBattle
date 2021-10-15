<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armia extends Model
{
    use HasFactory;

    protected $table = 'armia';

    protected $filable = [
        'lvl',
        'nazwa',
        'typ',
        'typ1',
        'typ2',
        'typ3',
        'sila',
        'zycia',
        'bonus_ile1',
        'bonus_komu1',
        'bonus_ile2',
        'bonus_komu2',
        'bonus_ile3',
        'bonus_komu3'
    ];
}
