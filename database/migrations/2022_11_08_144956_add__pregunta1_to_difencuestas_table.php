<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPregunta1ToDifencuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difencuestas', function (Blueprint $table) {
            //
            $table->string('Nombre',50);
            $table->string('Pregunta1',2);
            $table->string('Pregunta2',2);
            $table->string('Pregunta3',2);
            $table->string('Pregunta4',2);
            $table->string('Pregunta5',2);
            $table->string('Pregunta6',2);
            $table->string('Pregunta7',2);
            $table->string('Pregunta8',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('difencuestas', function (Blueprint $table) {
            $table->dropColumn('Nombre');
            $table->dropColumn('Pregunta1');
            $table->dropColumn('Pregunta2');
            $table->dropColumn('Pregunta3');
            $table->dropColumn('Pregunta4');
            $table->dropColumn('Pregunta5');
            $table->dropColumn('Pregunta6');
            $table->dropColumn('Pregunta7');
            $table->dropColumn('Pregunta8');
            //
        });
    }
}
