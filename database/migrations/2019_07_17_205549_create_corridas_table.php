<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorridasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corridas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objetivo');
            $table->string('descricao');
            $table->integer('numerotreino');
            $table->integer('aluno');
            $table->string('nometreino');
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
        Schema::dropIfExists('corridas');
    }
}
