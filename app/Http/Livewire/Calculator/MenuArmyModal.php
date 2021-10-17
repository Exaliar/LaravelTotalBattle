<?php

namespace App\Http\Livewire\Calculator;

use App\Enums\MenuTypes;
use App\Models\Army;
use App\Services\MenuArmyService;
use Livewire\Component;

class MenuArmyModal extends Component
{

    public $armies = [];
    public $armyTypes;

    public function render()
    {
        return view('livewire.calculator.menu-army-modal');
    }

    public function mount()
    {

        foreach (MenuTypes::TYPES as $type) {
            $this->armies[$type] = Army::select('id', 'name', 'lvl')
                ->where('menu_type', $type)
                ->orderBy('lvl', 'ASC')
                ->get()
                ->toArray();
        }
        $prepareData = new MenuArmyService();
        $this->armies = $prepareData->prepareDataForMenu($this->armies, 10);

        $this->armyTypes = MenuTypes::TYPES;
    }
}
