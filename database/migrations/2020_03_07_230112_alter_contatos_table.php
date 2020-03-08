<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->integer('nivel_id')->unsigned()->nullable();
            $table->foreign('nivel_id')->references('id')->on('nivels');
            //nivel ou nivels
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->dropForeign('contatos_nivel_id_foreign');
            $table->dropColumn('nivel_id');
        });
    }
}
