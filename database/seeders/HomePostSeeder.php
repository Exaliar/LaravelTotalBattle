<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\HomePost::factory(10)->create();
    }
}
