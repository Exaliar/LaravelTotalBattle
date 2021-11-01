<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\MenuTypes;
use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use App\Models\Armia;
use App\Models\Army;
use App\Models\ArmyBonus;
use App\Models\ArmyTeamSquad;
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
        return view('calculator');
    }

    public function forum()
    {
        $users =  User::find(2);
        return $users->armyTeamSquads;
        $armyTeam = ArmyTeamSquad::find(1);

        $test = new ArmyBonus([
            'army_id' => 1,
            'number_units' => 1234,
            'bonus_ap' => 5555,
            'bonus_hp' => 6666
        ]);

        $armyTeam->armyBonus()->save($test);


        return $armyTeam;

        // 'army_id',
        // 'army_team_squad_id',
        // 'number_units',
        // 'bonus_ap',
        // 'bonus_hp'
        // foreach ($users as $key => $user) {
        //     # code...
        //     return $user->armyTeamSquads;
        // }
        // return view('forum', compact('users'));
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        $users =  User::with(['armyTeamSquads' => function($query){
            $query->select('id', 'user_id', 'squad_monster_id', 'published')
                ->with(['monster' => function($query){
                    $query->select('squad_type', 'lvl', 'type');
            }]);
        }])->get();
        return view('auth.profile')->with('users', $users);
    }
}
