<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
   
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

            $table->id();
            $table->string("Nome");
            $table->string("Pais");
            $table->string("Telefone");
            
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
        Schema::dropIfExists('alunos');
    }
}
