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
        Schema::create('prestadors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('numero');
            $table->string('profesion');
            $table->string('edad');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestadors', function (Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('name');
            $table->dropColumn('numero');
            $table->dropColumn('profesion');
            $table->dropColumn('edad');
            $table->dropColumn('email');
            $table->dropColumn('direccion');
            $table->dropColumn('password');
            $table->dropColumn('timestamps');
        });
    }
};
