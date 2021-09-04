<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Monster::factory(10)->create();
    }
}
