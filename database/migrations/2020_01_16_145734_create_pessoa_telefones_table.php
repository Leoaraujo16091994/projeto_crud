<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_telefones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ddd');
            $table->string('numero');
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
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
        Schema::table('pessoa_telefones', function (Blueprint $table) {
            $table->dropForeign('pessoa_telefones_pessoa_id_foreign');
        });

        Schema::dropIfExists('pessoa_telefones');
    }
}
