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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(1);
            $table->string('model_name')->nullable();
            $table->string('game_mode')->nullable();
            $table->string('rank')->nullable();
            $table->string('purpose')->nullable();
            $table->string('game_id');
            $table->string('discord_id')->nullable();
            $table->text('content')->nullable();
            $table->string('applicant')->nullable();
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
        Schema::dropIfExists('recruitments');
    }
};
