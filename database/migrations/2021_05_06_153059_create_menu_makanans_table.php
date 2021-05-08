<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->string('harga_makanan');
            $table->string('desc_makanan');
            $table->string('img_makanan_1');
            $table->string('img_makanan_2');
            $table->string('img_makanan_3');
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
        Schema::dropIfExists('menu_makanans');
    }
}
