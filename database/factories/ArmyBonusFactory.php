<?php

namespace Database\Factories;

use App\Models\Army;
use App\Models\ArmyBonus;
use App\Models\ArmyTeamSquad;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArmyBonusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArmyBonus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'army_id' => Army::all()->random()->id,
            'army_team_squad_id' => ArmyTeamSquad::all()->random()->id,
            'number_units' => $this->faker->numberBetween(1, 80000),
            'bonus_ap' => $this->faker->numberBetween(1, 1200),
            'bonus_hp' => $this->faker->numberBetween(1, 1200),
        ];
    }
}
