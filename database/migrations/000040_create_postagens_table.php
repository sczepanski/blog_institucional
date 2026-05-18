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
        Schema::create('postagens', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('slug')->nullable();
            $table->string('conteudo')->nullable();
            $table->string('categoria')->nullable();
            $table->foreignId('imagem_id')->contrained('imagem')->nullable();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->date('data_publicacao')->nullable();            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postagens');
    }
};
