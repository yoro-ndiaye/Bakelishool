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
    Schema::create('panier_produit', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('panier_id');
        $table->unsignedBigInteger('produit_id');
        $table->integer('nombre')->default(1);
        $table->decimal('montant', 10, 2);
        // Ajoutez d'autres attributs au besoin

        $table->foreign('panier_id')->references('id')->on('paniers')->onDelete('cascade');
        $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panier_produit');
    }
};
