<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname',45)->nullable();
            $table->bigInteger( 'user_id')->nullable()->comment( 'Créateur' );
            $table->boolean( 'person_type' )->nullable()->comment( 'Type de personne' );
            $table->string( 'sigle' )->nullable()->comment( 'Sigle entreprise' );
            $table->string('photo',2048)->nullable();
            $table->date('birthday')->nullable();
            $table->string( 'matricule', 30 )->unique()->nullable()->comment( 'Matricule' );
            $table->string( 'grade', 30 )->nullable()->comment( 'Grade fonction' );
            $table->enum('bapteme',['oui','non'])->nullable();
            $table->enum('genre',['F','H'])->nullable();
            $table->string( 'juridique_forme' )->nullable()->comment( 'Forme juridique' );
            $table->string( 'legale_representent' )->nullable()->comment( 'Représentant légal de la structure' );
            $table->string( 'cc_number' )->nullable()->comment( 'Compte contribuable' );
            $table->string( 'social_siege' )->nullable()->comment( 'Situation géographique du siège social' );
            $table->boolean( 'matrimoniale' )->default( 1 )->comment( 'Situation matrimoniale' );
            $table->string( 'city', 45 )->nullable()->comment( 'Lieu de résidence' );
            $table->string( 'nationality', 45 )->nullable()->comment( 'Nationalité' );
            $table->integer('eglise_id')->nullable();
            $table->integer('pays_id')->nullable()->comment( 'Pays' );
            $table->string('phone')->unique()->nullable()->comment( 'Contacts' );
            $table->string('phone_representant')->unique()->nullable()->comment( 'Contacts du representant légale' );
            $table->enum('status',['0','1','2'])->default('1');
            $table->string( 'email' )->unique()->nullable()->comment( 'Adresse mail' );
            $table->date( 'entry_at', 45 )->nullable()->comment( 'Date d\'entrée dans le cabinet' );
            $table->date( 'out_at', 45 )->nullable()->comment( 'Date de sortie' );
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment( 'Mot de passe' );
            $table->string( 'address' )->nullable();
            $table->bigInteger( 'parent_id')->nullable()->comment( 'Personne de qui je suis ayant droit' );
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
