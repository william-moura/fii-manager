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
        Schema::create('fiis', function (Blueprint $table) {
            $table->increments('id')->unsigned()->primary();
            $table->string('fii_code');
            $table->decimal('fii_price', 12, 2);
            $table->string('fii_description')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis');
    }
};
