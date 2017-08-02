<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_gks', function (Blueprint $table) 
        {
         $table->increments('id');
         $table->date('date'); 
         $table->integer('no_card'); 
         $table->string('adress');
         $table->string('pib');
         $table->integer('age');
         $table->string('diagnoz');
         $table->string('brig');
         $table->string('tromb');
         $table->string('stent');
         $table->string('gospital');
         $table->string('support');
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
        Schema::drop('report_gks');
    }
}
