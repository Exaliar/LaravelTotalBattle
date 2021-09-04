<?php

namespace Database\Factories;

use App\Enums\MonsterTypes;
use App\Models\Monster;
use App\Models\NormalMonsterSquad;
use Illuminate\Database\Eloquent\Factories\Factory;

class NormalMonsterSquadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NormalMonsterSquad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lvl' => $this->faker->numberBetween($min = 0, $max = 7),
            'type' => $this->faker->randomElement(MonsterTypes::TYPES),
            'first_unit' => Monster::all()->random()->id,
            'first_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'second_unit' => Monster::all()->random()->id,
            'second_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000)
        ];
    }
}