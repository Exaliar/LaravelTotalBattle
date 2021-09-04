<?php

namespace App\Enums;

class MonsterTypes
{
    const UNDEAD = 'undead';
    const ELF = 'elf';
    const CURSED = 'cursed';
    const BARBARIAN = 'barbarian';
    const INFERNO = 'inferno';

    const TYPES = [
        self::UNDEAD,
        self::ELF,
        self::CURSED,
        self::BARBARIAN,
        self::INFERNO
    ];
}
