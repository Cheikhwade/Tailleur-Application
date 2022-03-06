<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->string('mesure');
            $table->string('avance');
            $table->string('poitrine');
            $table->string('epaule');
            $table->string('taille');
            $table->string('manche');
            $table->string('fesse');
            $table->string('cou');
            $table->string('tourh');
            $table->string('longp');
            $table->string('ceint');
            $table->string('longb');
            $table->string('longj');
            $table->string('cuisse');
            $table->string('manchec');
            $table->string('manchel');
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
        Schema::dropIfExists('articulos');
    }
}
