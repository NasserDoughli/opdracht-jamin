<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazijnTable extends Migration
{
    public function up()
    {
        Schema::create('magazijn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->decimal('verpakkingseenheid', 8, 2);
            $table->integer('aantal_aanwezig')->nullable();
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps(6);

            $table->foreign('product_id')->references('id')->on('product')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magazijn');
    }
}
