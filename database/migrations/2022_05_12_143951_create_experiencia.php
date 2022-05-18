<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 150);
            $table->string('business', 80);
            $table->string('time', 50);
            $table->string('description', 800);
            $table->foreignId('user_id')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia');
    }
}
