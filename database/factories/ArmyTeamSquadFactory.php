<?php

namespace Database\Factories;

use App\Models\ArmyBonus;
use App\Models\ArmyTeamSquad;
use App\Models\Monster;
use App\Models\SquadMonster;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArmyTeamSquadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArmyTeamSquad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'squad_monster_id' => SquadMonster::all()->random()->id,
            // 'army_bonus_id' => ArmyBonus::all()->random()->id,
            'published' => $this->faker->boolean(),
            // 'num_team' => $this->faker->numberBetween(1, 5),
        ];
    }
}
