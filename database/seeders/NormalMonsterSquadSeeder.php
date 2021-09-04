<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NormalMonsterSquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NormalMonsterSquad::factory(10)->create();
    }
}
