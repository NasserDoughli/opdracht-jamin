<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPerAllergeenTable extends Migration
{
    public function up()
    {
        Schema::create('product_per_allergeen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('allergeen_id');
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps(6);

            $table->foreign('product_id')->references('id')->on('product')->cascadeOnDelete();
            $table->foreign('allergeen_id')->references('id')->on('allergeen')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_per_allergeen');
    }
}
