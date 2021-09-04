<?php

namespace App\Http\Controllers;

use App\Models\CitadelMonsterSquad;
use App\Models\HeroicMonsterSquad;
use App\Models\NormalMonsterSquad;
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
        $normalMonsters = CitadelMonsterSquad::all();
        foreach ($normalMonsters as $normalMonster) {
            dd($normalMonster);
            // dd($normalMonster->first_unit_count * $normalMonster->firstMonster->strength);
        }
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
