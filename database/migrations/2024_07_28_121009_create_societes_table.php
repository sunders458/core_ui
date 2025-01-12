<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom de l'entreprise
            $table->string('adresse'); // Adresse de l'entreprise
            $table->string('telephone'); // Numéro de téléphone
            $table->string('email'); // Adresse email
            $table->string('site_web')->nullable(); // Site web de l'entreprise
            $table->string('numero_siret')->unique(); // Numéro SIRET de l'entreprise
            $table->string('numero_tva')->nullable(); // Numéro de TVA intracommunautaire
            $table->string('statut_juridique'); // Statut juridique (SARL, SAS, SA, etc.)
            $table->year('annee_creation'); // Année de création
            $table->text('historique')->nullable(); // Historique de l'entreprise
            $table->text('mission')->nullable(); // Mission de l'entreprise
            $table->text('vision')->nullable(); // Vision de l'entreprise
            $table->text('valeurs')->nullable(); // Valeurs de l'entreprise
            $table->string('dirigeant'); // Nom du dirigeant
            $table->integer('effectif')->nullable(); // Nombre d'employés
            $table->string('services')->nullable(); // Services offerts
            $table->string('secteurs')->nullable(); // Secteurs d'intervention
            $table->string('specialites')->nullable(); // Spécialités
            $table->text('projets_emblematiques')->nullable(); // Projets emblématiques
            $table->text('clients_principaux')->nullable(); // Clients principaux
            $table->text('certifications')->nullable(); // Certifications
            $table->text('affiliations')->nullable(); // Affiliations professionnelles
            $table->text('responsabilite_sociale')->nullable(); // Responsabilité sociale
            $table->text('innovation')->nullable(); // Innovation et développement durable
            $table->string('logo',1048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societes');
    }
}
