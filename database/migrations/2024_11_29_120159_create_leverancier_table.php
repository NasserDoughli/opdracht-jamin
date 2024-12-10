<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeverancierTable extends Migration
{
    public function up()
    {
        Schema::create('leverancier', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->string('contact_persoon', 100);
            $table->string('leverancier_nummer', 15)->unique();
            $table->string('mobiel', 15);
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('leverancier');
    }
}
