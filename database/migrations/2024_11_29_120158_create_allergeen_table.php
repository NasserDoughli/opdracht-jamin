<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergeenTable extends Migration
{
    public function up()
    {
        Schema::create('allergeen', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->string('omschrijving', 255)->nullable();
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergeen');
    }
}

