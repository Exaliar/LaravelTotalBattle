<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArmyTeamSquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ArmyTeamSquad::factory(50)->create();
    }
}
