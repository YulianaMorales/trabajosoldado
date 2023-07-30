<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createimagestable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');//agreagar las columnas especificas de la imagen(nombre,url)
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            $table->timestamps();

            //indice y llaves foraneas para la relacion poliformica
            $table->index(['imageable_id', 'imageable_type']);
            $table->foreign('imageable_id')->references('id')->on('soldiers')->onDelete('cascade');
            $table->foreign('imageable_id')->references('id')->on('barracks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
