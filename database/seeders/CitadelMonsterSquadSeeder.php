<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitadelMonsterSquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CitadelMonsterSquad::factory(10)->create();
    }
}
