<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('location', 80);
            $table->string('contract', 50);
            $table->string('course', 200);
            $table->string('requeriments', 500);
            $table->string('description', 800);
            $table->foreignId('user_id')->default(null);
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
        //
        Schema::dropIfExists('ofertas');
    }
}
