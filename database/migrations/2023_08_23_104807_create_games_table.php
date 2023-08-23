<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('body', 200);
            $table->string('number',5);
            $table->string('game_time',5);
            $table->string('image',50);
            $table->string('release',30);
            $table->string('revel',5);
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
            // $table->string('rule_type',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
