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
        Schema::create('peticions', function (Blueprint $table) {
            $table->id();

            $table->string( column: 'name');
            $table->string( column: 'descripcion');
            $table->string( column: 'item');
            $table->integer( column: 'cantidad');
            $table->boolean('aprobado');
            $table->time(column: 'time');
            $table->date( column: 'date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peticions');
    }
};
