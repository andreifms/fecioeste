<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('nivel');
            $table->foreignId('area_id')->constrained()->onDelete('cascade');
            $table->boolean('convidado');
            $table->foreignId('escola_id')->constrained()->onDelete('cascade');
            $table->foreignId('orientador_id')->constrained('orientadores')->onDelete('cascade');
            $table->foreignId('coorientador_id')->nullable()->constrained('orientadores')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
