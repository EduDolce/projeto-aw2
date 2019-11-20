<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iniciaisNome');
            $table->date('dataNascimento');
            $table->string('genero');
            $table->unsignedBigInteger('consultoria_id');
            $table->timestamps();
            $table->SoftDeletes();

            $table->foreign('consultoria_id')
            ->references('id')->on('consultorias')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
