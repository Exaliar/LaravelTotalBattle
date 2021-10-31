<?php

namespace App\Http\Livewire\Calculator;

use App\Models\Army;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PlayerPanel extends Component
{

    protected $listeners = ['army'];
    public $armiesSquad = [];
    public $firstAtak = 'player'; //player, monster
    public $massChangeAtak = 25;
    public $massChangeHelth = 25;

    public function render()
    {
        return view('livewire.calculator.player-panel');
    }

    public function mount()
    {
        $this->armiesSquad = session()->get('armia');

        if (empty($this->armiesSquad)) {
            $this->armiesSquad[] = [
                'army' => Army::get()->random()->toArray(),
                'count' => '1',
                'atakBonus' => '',
                'healthBonus' => ''
            ];
        }
    }

    public function calculate()
    {
        ddd([
            'MONSTER' => session('monster'),
            'ARMIA' => session('armia'),
            'FIRST_ATAK' => $this->firstAtak,
            'MASS_CHANGE' => ['Atak' => $this->massChangeAtak, 'Życie' => $this->massChangeHelth],
            'SESSION' => session()->all(),
        ]);
    }

    public function dehydrate()
    {
        $options = [
            'options' => [
                'min_range' => 0
            ]
        ];

        foreach ($this->armiesSquad as $index => $armia) {
            if (!filter_var($this->armiesSquad[$index]['count'], FILTER_VALIDATE_INT, $options)) $this->armiesSquad[$index]['count'] = '';
            if (!filter_var($this->armiesSquad[$index]['atakBonus'], FILTER_VALIDATE_FLOAT, $options)) $this->armiesSquad[$index]['atakBonus'] = '';
            if (!filter_var($this->armiesSquad[$index]['healthBonus'], FILTER_VALIDATE_FLOAT, $options)) $this->armiesSquad[$index]['healthBonus'] = '';
            if (!filter_var($this->massChangeAtak, FILTER_VALIDATE_FLOAT, $options)) $this->massChangeAtak = 0;
            if (!filter_var($this->massChangeHelth, FILTER_VALIDATE_FLOAT, $options)) $this->massChangeHelth = 0;
        }

        session(['armia' => $this->armiesSquad]);
    }

    public function changeArmy(int $index)
    {
        session(['changeArmy' => $index]);
    }

    public function deleteArmy(int $index)
    {
        unset($this->armiesSquad[$index]);
        $this->armiesSquad = array_values($this->armiesSquad);
    }

    public function saveSquad()
    {
        // ddd(Auth::user()->name);
        $army = [];
        foreach ($this->armiesSquad as $index => $each) {
            $army[] = [
                'army_id' => $each['army']['id'],
                'number_units' => $each['count'],
                'bonus_ap' => $each['atakBonus'],
                'bonus_hp' => $each['healthBonus']
            ];
        }
        ddd(json_encode([
            'monster' => ['id' => session('monster.id')],
            'army' => $army
        ]));
    }

    public function decreaseAtak()
    {
        foreach ($this->armiesSquad as $index => $armia) {
            if (floatval($this->armiesSquad[$index]['atakBonus']) - $this->massChangeAtak > 0) {
                $this->armiesSquad[$index]['atakBonus'] = round(floatval($this->armiesSquad[$index]['atakBonus']) - $this->massChangeAtak, 2);
            } else {
                $this->armiesSquad[$index]['atakBonus'] = 0;
            }
        }
    }

    public function increaseAtak()
    {
        foreach ($this->armiesSquad as $index => $armia) {
            if (floatval($this->armiesSquad[$index]['atakBonus']) + $this->massChangeAtak > 0) {
                $this->armiesSquad[$index]['atakBonus'] = round(floatval($this->armiesSquad[$index]['atakBonus']) + $this->massChangeAtak, 2);
            } else {
                $this->armiesSquad[$index]['atakBonus'] = 0;
            }
        }
    }

    public function decreaseHealth()
    {
        foreach ($this->armiesSquad as $index => $armia) {
            if (floatval($this->armiesSquad[$index]['healthBonus']) - $this->massChangeHelth > 0) {
                $this->armiesSquad[$index]['healthBonus'] = round(floatval($this->armiesSquad[$index]['healthBonus']) - $this->massChangeHelth, 2);
            } else {
                $this->armiesSquad[$index]['healthBonus'] = 0;
            }
        }
    }

    public function increaseHealth()
    {
        foreach ($this->armiesSquad as $index => $armia) {
            if (floatval($this->armiesSquad[$index]['healthBonus']) + $this->massChangeHelth > 0) {
                $this->armiesSquad[$index]['healthBonus'] = round(floatval($this->armiesSquad[$index]['healthBonus']) + $this->massChangeHelth, 2);
            } else {
                $this->armiesSquad[$index]['healthBonus'] = 0;
            }
        }
    }

    public function army(int $id)
    {
        if ((session('changeArmy') === null)) {
            $this->armiesSquad[] = [
                'army' => Army::where('id', $id)->first()->toArray(),
                'count' => '',
                'atakBonus' => '',
                'healthBonus' => ''
            ];
        } else {
            $this->armiesSquad[session('changeArmy')]['army'] = Army::where('id', $id)->first()->toArray();
            session()->forget('changeArmy');
        }

        $this->dispatchBrowserEvent('closeArmyModal');
    }
}
