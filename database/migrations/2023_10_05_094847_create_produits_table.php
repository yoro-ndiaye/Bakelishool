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
    Schema::create('produits', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->text('description');
        $table->unsignedBigInteger('categorie_id');
        $table->foreign('categorie_id')->references('id')->on('categories_produits');
        $table->decimal('prix', 10, 2);
        $table->integer('quantite_en_stock');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
