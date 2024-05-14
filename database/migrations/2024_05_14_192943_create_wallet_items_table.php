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
        Schema::create('wallet_items', function (Blueprint $table) {
            $table->increments('id')->unsigned()->primary();
            $table->integer('wallet_id')->unsigned();
            $table->integer('fii_id')->unsigned();
            $table->decimal('wallet_item_amount', 12, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('fii_id')->references('id')->on('fiis')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_items');
    }
};
