<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('conteudo');
            $table->integer('consultoria_id')->unsigned();
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
        Schema::dropIfExists('respostas');
    }
}
