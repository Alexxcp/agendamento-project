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
            $table->increments('id');
            $table->string('saudacao', 5);
            $table->string('nome', 100);
            $table->char('telefone', 15);
            $table->string('email', 200)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->decimal('altura', 3, 2);
            $table->decimal('peso', 5, 2);
            $table->string('avatar', 200)->nullable();
            $table->text('nota')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}