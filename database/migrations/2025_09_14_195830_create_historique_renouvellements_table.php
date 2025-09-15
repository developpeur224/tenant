<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historique_renouvellements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('abonnement_id')->constrained()->onDelete('cascade');
            $table->date('date_renouvellement');
            $table->date('ancienne_date_fin');
            $table->date('nouvelle_date_fin');
            $table->integer('duree_ajoutee'); 
            $table->decimal('montant', 10, 2)->nullable();
            $table->string('mode_paiement')->nullable();
            $table->string('reference_paiement')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            
            // Index pour les requêtes fréquentes
            $table->index('abonnement_id');
            $table->index('date_renouvellement');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historique_renouvellements');
    }
};