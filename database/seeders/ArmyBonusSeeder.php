<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArmyBonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ArmyBonus::factory(100)->create();
    }
}
