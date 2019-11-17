<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lesaoOcular');
            $table->int('tempoManifestacao');
            $table->text('historicoOcular');
            $table->text('antecedentes');
            $table->string('tratamentoPrevio');
            $table->text('tratamentoResposta');
            $table->string('motivo');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultorias');
    }
}
