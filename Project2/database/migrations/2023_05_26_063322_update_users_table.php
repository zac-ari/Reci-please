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
            $table->integer('Fav1')->nullable()->change();
            $table->integer('Fav2')->nullable()->change();
            $table->integer('Fav3')->nullable()->change();
            $table->integer('Fav4')->nullable()->change();
            $table->integer('Fav5')->nullable()->change();
            $table->integer('Fav6')->nullable()->change();
            $table->integer('Fav7')->nullable()->change();
            $table->integer('Fav8')->nullable()->change();
            $table->integer('Fav9')->nullable()->change();
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
