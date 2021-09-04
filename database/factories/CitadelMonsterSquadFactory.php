<?php

namespace Database\Factories;

use App\Enums\MonsterTypes;
use App\Models\CitadelMonsterSquad;
use App\Models\Monster;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitadelMonsterSquadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CitadelMonsterSquad::class;

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
            'second_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'third_unit' => Monster::all()->random()->id,
            'third_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'fourth_unit' => Monster::all()->random()->id,
            'fourth_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'fifth_unit' => Monster::all()->random()->id,
            'fifth_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
            'sixth_unit' => Monster::all()->random()->id,
            'sixth_unit_count' => $this->faker->numberBetween($min = 1, $max = 7000),
        ];
    }
}
