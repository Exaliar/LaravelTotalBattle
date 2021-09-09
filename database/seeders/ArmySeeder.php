<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArmySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Army::factory(200)->create();
    }
}
