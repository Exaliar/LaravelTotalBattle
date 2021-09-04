<?php

use App\Enums\MonsterTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRareMonsterSquadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rare_monster_squads', function (Blueprint $table) {
            $table->id();
            $table->integer('lvl');
            $table->enum('type', MonsterTypes::TYPES);
            $table->foreignId('first_unit')->constrained('monsters');
            $table->integer('first_unit_count');
            $table->foreignId('second_unit')->constrained('monsters');
            $table->integer('second_unit_count');
            $table->foreignId('third_unit')->constrained('monsters');
            $table->integer('third_unit_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rare_monster_squads');
    }
}
