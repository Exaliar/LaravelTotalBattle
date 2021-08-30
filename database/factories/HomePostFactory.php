<?php

namespace Database\Factories;

use App\Models\HomePost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomePostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomePost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'photo_path' => $this->faker->text(20),
            'description' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
            'created_at' => now(),
            'top_post' => $this->faker->boolean(false)
        ];
    }
}
