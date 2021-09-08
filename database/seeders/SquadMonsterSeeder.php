<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SquadMonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SquadMonster::factory(200)->create();
    }
}
