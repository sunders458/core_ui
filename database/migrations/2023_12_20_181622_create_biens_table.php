<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->text('libelle')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(0);
            $table->string('illustration',2048)->nullable();
            $table->integer('publie')->nullable()->comment('date de mise en vente');
            $table->date('publie_at_debut')->nullable()->comment('Debut des traveaux');
            $table->date('publie_at_fin_prevue')->nullable()->comment('Fin prevue');
            $table->date('publie_at_fin')->nullable()->comment('Fin effectif');
            $table->integer('prix')->comment('prix du bien');
            $table->integer('views')->nullable();
            $table->string('localisation')->nullable();
            $table->integer('longitude')->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('superficie')->nullable();
            $table->integer('nbre_pieces')->nullable();
            $table->integer('nbre_douche')->default(1);
            $table->string('lot')->nullable();
            $table->string('ilot')->nullable()->comment('Lot et ilot unique');
            $table->string('type_logement')->nullable();
            $table->string('finition')->nullable();
            $table->string('type_bien')->nullable();
            $table->string('garage')->default("non");
            $table->string('dependance')->default("non");
            $table->tinyInteger('condition')->default(0);
            $table->integer('promotion_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('etat_avancement')->default(0);
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
        Schema::dropIfExists('biens');
    }
}
