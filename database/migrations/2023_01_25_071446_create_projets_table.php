<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('description',1046)->nullable();
            $table->float('budget',11,2);
            $table->float('montant_obtenu',11,2)->default(0);
            $table->float('montant_restant',11,2)->default(0);
            $table->date('delais')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('obsevation',1046)->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('projets');
    }
}
