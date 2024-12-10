<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPerLeverancierTable extends Migration
{
    public function up()
    {
        Schema::create('product_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leverancier_id');
            $table->unsignedBigInteger('product_id');
            $table->date('datum_levering');
            $table->integer('aantal');
            $table->date('datum_eerst_volgende_levering')->nullable();
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps(6);

            $table->foreign('leverancier_id')->references('id')->on('leverancier')->cascadeOnDelete();
            $table->foreign('product_id')->references('id')->on('product')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_per_leverancier');
    }
}
