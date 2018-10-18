<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiemdanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemdanh',function(Blueprint $table){
            $table->increments('id');
            $table->integer('phancong_id')->unsigned();
            $table->foreign('phancong_id')->references('id')->on('phancongcv');
            $table->integer('sinhvien_id')->unsigned();
            $table->foreign('sinhvien_id')->references('id')->on('sinhvien');
            $table->Boolean('status');
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
        Schema::dropIfExists('diemdanh');
    }
}
