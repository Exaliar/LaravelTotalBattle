<?php

namespace App\Http\Livewire\Calculator;

use App\Enums\MenuTypes;
use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use App\Models\Army;
use App\Models\ArmyTeamSquad;
use App\Models\SquadMonster;
use App\Services\MenuArmyService;
use App\Services\MenuMonstersService;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MenuMonsters extends Component
{

    protected $listeners = ['monster'];
    public $monsters = [];
    public $monsterScope = [
        'first_monster',
        'second_monster',
        'third_monster',
        'fourth_monster',
        'fifth_monster',
        'sixth_monster',
        'seventh_monster'
    ];
    public $monsterTypes;

    public function render()
    {
        return view('livewire.calculator.menu-monsters');
    }

    public function mount($id = 1)
    {
        $this->monsters = SquadMonster::where('id', $id)->first()->toArray();
        session(['monster' => $this->monsters]);
    }

    public function monster($id)
    {
        $this->monsters = SquadMonster::where('id', $id)->first()->toArray();
        session(['monster' => $this->monsters]);
        $this->dispatchBrowserEvent('closeMonsterModal');
    }
}
