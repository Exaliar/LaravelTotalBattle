<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(HomePostSeeder::class);
        $this->call(MonsterSeeder::class);
        $this->call(NormalMonsterSquadSeeder::class);
        $this->call(RareMonsterSquadSeeder::class);
        $this->call(HeroicMonsterSquadSeeder::class);
        $this->call(CitadelMonsterSquadSeeder::class);
    }
}
