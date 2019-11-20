0<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('segmentoAnterior');
            $table->string('caracteristica');
            $table->string('nome');
            $table->unsignedBigInteger('consultoria_id');
            $table->timestamps();
            $table->SoftDeletes();

            $table->foreign('consultoria_id')
            ->references('id')
            ->on('consultorias')
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
        Schema::dropIfExists('arquivos');
    }
}
