<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RareMonsterSquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\RareMonsterSquad::factory(10)->create();
    }
}
