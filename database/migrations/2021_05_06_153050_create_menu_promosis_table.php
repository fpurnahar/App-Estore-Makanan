<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPromosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_promosis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mkn_promosi_slide');
            $table->string('harga_mkn_promosi_slide');
            $table->string('desc_mkn_promosi_slide');
            $table->string('img_mkn_promosi_slide');

            $table->string('nama_mkn_promosi_middle');
            $table->string('harga_mkn_promosi_middle');
            $table->string('desc_mkn_promosi_middle');
            $table->string('img_mkn_promosi_middle');

            $table->string('nama_mkn_promosi_buttom');
            $table->string('harga_mkn_promosi_buttom');
            $table->string('desc_mkn_promosi_buttom');
            $table->string('img_mkn_promosi_buttom');
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
        Schema::dropIfExists('menu_promosis');
    }
}
