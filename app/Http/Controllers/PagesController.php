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
