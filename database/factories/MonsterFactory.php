<?php

namespace Database\Factories;

use App\Enums\UnitCategories;
use App\Models\Monster;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonsterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Monster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lvl' => $this->faker->numberBetween(0, 7),
            'name' => $this->faker->name(),
            'first_type' => $this->faker->randomElement(UnitCategories::TYPES),
            'second_type' => $this->faker->randomElement(UnitCategories::TYPES),
            'third_type' => $this->faker->randomElement(UnitCategories::TYPES),
            'strength' => $this->faker->numberBetween(1, 7000),
            'health' => $this->faker->numberBetween(1, 7000),
            'first_bonus'  => $this->faker->numberBetween(1, 1200),
            'first_bonus_who' => $this->faker->randomElement(UnitCategories::TYPES),
            'second_bonus' => $this->faker->numberBetween(1, 1200),
            'second_bonus_who' => $this->faker->randomElement(UnitCategories::TYPES),
            'third_bonus' => $this->faker->numberBetween(1, 1200),
            'third_bonus_who' => $this->faker->randomElement(UnitCategories::TYPES),
            'graphics' => $this->faker->url()
        ];
    }
}
