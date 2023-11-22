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
        Schema::table('users', function (Blueprint $table) {
            $table->string('disiplin')->nullable();
            $table->string('kreatif_inovatif')->nullable();
            $table->string('sabar_ramah')->nullable();
            $table->string('humoris_menyenangkan')->nullable();
            $table->string('komunikatif')->nullable();
            $table->string('favorit_jurusan')->nullable();
            $table->boolean('voted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
