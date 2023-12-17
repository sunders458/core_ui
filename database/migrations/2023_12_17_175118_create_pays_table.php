<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->length(3);
            $table->string('libelle', 150);
            $table->string('gentile', 255);
            $table->string('iso', 3);
            $table->integer('prefixe')->length(4);
            $table->boolean('sup')->default(0);
            $table->index(['sup', 'libelle', 'gentile']);
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
        Schema::dropIfExists('pays');
    }
}
