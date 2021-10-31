<?php

use App\Models\Army;
use App\Models\ArmyTeamSquad;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmyBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('army_bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Army::class)->constrained();
            $table->foreignIdFor(ArmyTeamSquad::class)->constrained();
            $table->unsignedInteger('number_units')->default('0'); // max 4,294,967,295
            $table->unsignedInteger('bonus_ap')->default('0'); // max 4,294,967,295
            $table->unsignedInteger('bonus_hp')->default('0'); // max 4,294,967,295
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
        Schema::dropIfExists('army_bonuses');
    }
}
