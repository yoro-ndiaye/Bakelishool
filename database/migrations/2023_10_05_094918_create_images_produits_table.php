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
    Schema::create('images_produits', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('produit_id');
        $table->foreign('produit_id')->references('id')->on('produits');
        $table->string('url');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_produits');
    }
};
