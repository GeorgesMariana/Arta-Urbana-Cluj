<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFairsTable extends Migration
{
    public function up()
    {
        Schema::create('fairs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('image')->nullable();  // Elimină coloana duplicată
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fairs');
    }
}
