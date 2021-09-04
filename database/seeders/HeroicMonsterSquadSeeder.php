<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeroicMonsterSquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\HeroicMonsterSquad::factory(10)->create();
    }
}
