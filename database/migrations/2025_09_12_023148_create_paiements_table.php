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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained()->onDelete('cascade');
            $table->foreignId('contrat_id')->constrained('contrats_location')->onDelete('cascade');
            $table->string('mois'); // format YYYY-MM
            $table->date('date_paiement');
            $table->decimal('montant', 10, 2);
            $table->enum('mode_paiement', ['cash', 'virement', 'mobile_money', 'carte'])->default('cash');
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
