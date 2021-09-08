<?php

namespace Database\Factories;

use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use App\Models\Monster;
use App\Models\SquadMonster;
use Illuminate\Database\Eloquent\Factories\Factory;

class SquadMonsterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SquadMonster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'squad_type' => $this->faker->randomElement(SquadTypes::TYPES),
            'lvl' => $this->faker->numberBetween($min = 1, $max = 50),
            'type' => $this->faker->randomElement(MonsterTypes::TYPES),
            'first_monster' => Monster::all()->random()->id,
            'first_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'second_monster' => Monster::all()->random()->id,
            'second_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'third_monster' => Monster::all()->random()->id,
            'third_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'fourth_monster' => Monster::all()->random()->id,
            'fourth_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'fifth_monster' => Monster::all()->random()->id,
            'fifth_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'sixth_monster' => Monster::all()->random()->id,
            'sixth_monster_count' => $this->faker->numberBetween($min = 1, $max = 7000),
        ];
    }
}
