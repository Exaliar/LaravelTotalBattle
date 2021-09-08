<?php

use App\Enums\MonsterTypes;
use App\Enums\SquadTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquadMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squad_monsters', function (Blueprint $table) {
            $table->id();
            $table->enum('squad_type', SquadTypes::TYPES);
            $table->unsignedTinyInteger('lvl');
            $table->enum('type', MonsterTypes::TYPES);
            $table->foreignId('first_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('first_monster_count');
            $table->foreignId('second_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('second_monster_count');
            $table->foreignId('third_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('third_monster_count');
            $table->foreignId('fourth_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('fourth_monster_count');
            $table->foreignId('fifth_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('fifth_monster_count');
            $table->foreignId('sixth_monster')->nullable()->constrained('monsters');
            $table->unsignedInteger('sixth_monster_count');
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
        Schema::dropIfExists('squad_monsters');
    }
}
