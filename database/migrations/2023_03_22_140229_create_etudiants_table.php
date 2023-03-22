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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('matricule');
            $table->string('niveau');
            $table->string('option');
            $table->string('parcours_type');
            $table->string('ue');
            $table->string('motif_requete');
            $table->string('exprimez_requete');
            $table->string('reponse_jury');
            $table->string('departement');
            $table->string('autre');
            $table->string('signature_etudiant');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
