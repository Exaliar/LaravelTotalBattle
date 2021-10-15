<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\MenuTypes;
use App\Enums\UnitCategories;
use App\Models\Armia;
use App\Models\Army;

class ConvertDatabaseTypesToNewTableService
{
    public static function mapingUnitCategories(?string $unit): ?string
    {
        return $unit == 'Piechota' ? UnitCategories::MELEE_UNIT : ($unit == 'Dalekosiezna' ? UnitCategories::RANGED_UNIT : ($unit == 'Jezdziec' ? UnitCategories::MOUNTED_UNIT : ($unit == 'Latajaca' ? UnitCategories::FLYING_UNIT : ($unit == 'Machina' ? UnitCategories::SIEGE_ENGINE : ($unit == 'Fortyfikacja' ? UnitCategories::FORTIFICATION : ($unit == 'Skaut' ? UnitCategories::SCOUT : ($unit == 'Bestia' ? UnitCategories::BEAST : ($unit == 'Elemental' ? UnitCategories::ELEMENTAL : ($unit == 'Olbrzym' ? UnitCategories::GIANT : ($unit == 'Smok' ? UnitCategories::DRAGON : ($unit == 'Czlowiek' ? UnitCategories::HUMAN : NULL)))))))))));
    }

    private function prepareIfDropTableArmia()
    {
        $oldArmies = Armia::all()->toArray();
        foreach ($oldArmies as $eachOldArmy) {
            // ddd($eachOldArmy['lvl']);

            $eachOldArmy['typ'] = $eachOldArmy['typ'] == 'Gwardzista' ? MenuTypes::GUARDSMAN : ($eachOldArmy['typ'] == 'Specjalista' ? MenuTypes::SPECIALIST : ($eachOldArmy['typ'] == 'Korpus Inzynierow' ? MenuTypes::ENGINEER_CORP : ($eachOldArmy['typ'] == 'Smok' ? MenuTypes::DRAGON : ($eachOldArmy['typ'] == 'Elemental' ? MenuTypes::ELEMENTAL : ($eachOldArmy['typ'] == 'Olbrzym' ? MenuTypes::GIANT : ($eachOldArmy['typ'] == 'Bestia' ? MenuTypes::BEAST : ($eachOldArmy['typ'] == 'Autorytet' ? MenuTypes::AUTHORITY : 'BRAK')))))));
            $eachOldArmy['typ1'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['typ1']);
            $eachOldArmy['typ2'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['typ2']);
            $eachOldArmy['typ3'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['typ3']);
            $eachOldArmy['bonus_komu1'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['bonus_komu1']);
            $eachOldArmy['bonus_komu2'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['bonus_komu2']);
            $eachOldArmy['bonus_komu3'] = ConvertDatabaseTypesToNewTableService::mapingUnitCategories($eachOldArmy['bonus_komu3']);

            $army = new Army();
            $army->lvl = $eachOldArmy['lvl'];
            $army->name = $eachOldArmy['nazwa'];
            $army->menu_type = $eachOldArmy['typ'];
            $army->first_type = $eachOldArmy['typ1'];
            $army->second_type = $eachOldArmy['typ2'];
            $army->third_type = $eachOldArmy['typ3'];
            $army->strength = $eachOldArmy['sila'];
            $army->health = $eachOldArmy['zycia'];
            $army->first_bonus = $eachOldArmy['bonus_ile1'];
            $army->first_bonus_who = $eachOldArmy['bonus_komu1'];
            $army->second_bonus = $eachOldArmy['bonus_ile2'];
            $army->second_bonus_who = $eachOldArmy['bonus_komu2'];
            $army->third_bonus = $eachOldArmy['bonus_ile3'];
            $army->third_bonus_who = $eachOldArmy['bonus_komu3'];
            $army->graphics = NULL;
            $army->save();
        }
    }
}
