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
        Schema::create('hero_homes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('heading_first');
            $table->string('heading_second');
            $table->string('heading_third');
            $table->string('heading_forth');
            $table->string('heading_fiveth');
            $table->string('redadmore_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_homes');
    }
};
