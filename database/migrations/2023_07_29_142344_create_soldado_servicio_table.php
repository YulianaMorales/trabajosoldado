<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soldado_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soldado_id');
            $table->unsignedBigInteger('servicio_id');

            $table->timestamps();

            $table->foreign('soldado_id')->references('id')->on('soldado')->onDelete('cascada');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('soldado_servicio');
    }
};
