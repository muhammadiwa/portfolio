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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tlp', 15);
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->string('degre')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('instagram')->nullable()->default('https://instagram./');
            $table->string('linkedin')->nullable()->default('https://linkedin.com/');
            $table->string('twitter')->nullable()->default('https://twitter.com/');
            $table->string('github')->nullable()->default('https://github.com/');
            $table->string('facebook')->nullable()->default('https://facebook.com/');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
