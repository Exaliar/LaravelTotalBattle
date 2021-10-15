<?php

namespace App\Http\Livewire\Calculator;

use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use App\Models\SquadMonster;
use App\Services\MenuMonstersService;
use Livewire\Component;

class MenuMonstersModal extends Component
{

    public $monsters = [];
    public $monsterTypes;

    public function render()
    {
        return view('livewire.calculator.menu-monsters-modal');
    }

    public function mount()
    {
        foreach (SquadTypes::TYPES as $type) {
            $this->monsters[$type] = SquadMonster::select('id', 'lvl', 'type')
                ->where('squad_type', $type)
                ->orderBy('lvl', 'ASC')
                ->get()
                ->toArray();
        }
        $prepareData = new MenuMonstersService();
        $this->monsters = $prepareData->prepareDataForMenu($this->monsters, 5, 50);

        $this->monsterTypes = MonsterTypes::TYPES;
    }
}
