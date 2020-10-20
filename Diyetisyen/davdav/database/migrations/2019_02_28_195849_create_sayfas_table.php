<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSayfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayfas', function (Blueprint $table) {
            $table->increments('sayfa_id');
            $table->string('sayfa_adi');
            $table->text('sayfa_icerik');
            $table->string('sayfa_kategori');       
            $table->integer('sayfa_hit');
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
        Schema::dropIfExists('sayfas');
    }
}
