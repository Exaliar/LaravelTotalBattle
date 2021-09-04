<?php

use App\Enums\UnitCategories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->integer('lvl');
            $table->string('name');
            $table->enum('first_type', UnitCategories::TYPES)->nullable();
            $table->enum('second_type', UnitCategories::TYPES)->nullable();
            $table->enum('third_type', UnitCategories::TYPES)->nullable();
            $table->integer('strength');
            $table->integer('health');
            $table->unsignedInteger('first_bonus')->nullable();
            $table->enum('first_bonus_who', UnitCategories::TYPES)->nullable();
            $table->unsignedInteger('second_bonus')->nullable();
            $table->enum('second_bonus_who', UnitCategories::TYPES)->nullable();
            $table->unsignedInteger('third_bonus')->nullable();
            $table->enum('third_bonus_who', UnitCategories::TYPES)->nullable();
            $table->string('graphics')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('monsters');
    }
}
