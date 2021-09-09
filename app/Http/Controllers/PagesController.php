<?php

namespace App\Http\Controllers;

use App\Enums\SquadTypes;
use App\Models\CitadelMonsterSquad;
use App\Models\HeroicMonsterSquad;
use App\Models\NormalMonsterSquad;
use App\Models\SquadMonster;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    // public function home()
    // {
    //     return view('home');
    // }

    public function calculator()
    {
        // dd(NormalMonsterSquad::with(['firstMonster', 'secondMonster'])->get());
        // $normalMonsters = SquadMonster::select('id', 'squad_type', 'lvl', 'type', 'first_monster', 'first_monster_count')
        //     ->where('squad_type', SquadTypes::NORMAL)
        //     ->where('id', 91)
        //     ->with(['firstMonster', 'secondMonster'])
        //     ->orderBy('lvl')
        //     ->first();
        // foreach ($normalMonsters as $normalMonster) {
        //     ddd($normalMonsters);
        $users = User::with(['armyTeamSquad'])->get();
        foreach ($users as $user) {
            ddd($user->armyTeamSquad->count());
        }
        //     dd($normalMonster->first_unit_count * $normalMonster->firstMonster->strength);

        // dd($normalMonsters);
        return view('calculator');
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
