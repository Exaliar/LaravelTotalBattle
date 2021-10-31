<?php

namespace App\Http\Livewire\Calculator;

use App\Models\ArmyTeamSquad;
use Livewire\Component;

class Raport extends Component
{
    public function render()
    {
        // return ArmyTeamSquad::find(4);
        // ddd(ArmyTeamSquad::where('id', 4)->get()->armyBonus());
        return view('livewire.calculator.raport');
    }
}
