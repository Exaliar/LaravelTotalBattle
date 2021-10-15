<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\MenuTypes;
use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use App\Models\Armia;
use App\Models\Army;
use App\Models\SquadMonster;
use App\Models\User;
use App\Services\ConvertDatabaseTypesToNewTableService;
use App\Services\MenuArmyService;
use App\Services\MenuMonstersService;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function calculator()
    {

        $army = [];

        foreach (MenuTypes::TYPES as $type) {
            $army[$type] = Army::select('id', 'name', 'lvl')
                ->where('menu_type', $type)
                ->orderBy('lvl', 'ASC')
                ->get()
                ->toArray();
        }
        $prepareData = new MenuArmyService();
        $army = $prepareData->prepareDataForMenu($army, 10);

        return view('calculator')
            ->with('armies', $army)
            // ->with('monsterTypes', MonsterTypes::TYPES)
            ->with('armyTypes', MenuTypes::TYPES);
    }

    public function forum()
    {
        return view('forum');
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}
