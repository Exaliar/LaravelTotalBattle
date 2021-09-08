<?php

namespace App\Enums;

class SquadTypes
{
    const NORMAL = 'normal';
    const RARE = 'rare';
    const HEROIC = 'heroic';
    const CITADEL = 'citadel';
    const EPIC = 'epic';
    const OTHER = 'other';

    const TYPES = [
        self::NORMAL,
        self::RARE,
        self::HEROIC,
        self::CITADEL,
        self::EPIC,
        self::OTHER
    ];
}
