<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYorumlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yorumlars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('comment');
            $table->integer('yorum_sayfa_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('yorumlars', function ($table) {
            $table->foreign('yorum_sayfa_id')->references('sayfa_id')->on('sayfas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['yorum_sayfa_id']);
        Schema::dropIfExists('yorumlars');
       
    }
}
