<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhancongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancongcv',function(Blueprint $table){
                $table->increments('id');
                $table->integer('nhanvien_id')->unsigned();
                $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
                $table->integer('mamon_id')->unsigned();
                $table->foreign('mamon_id')->references('id')->on('monhoc');
                $table->integer('malop_id')->unsigned();
                $table->foreign('malop_id')->references('id')->on('lop');
                $table->dateTime('giobd');
                $table->dateTime('giokt');
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
        Schema::dropIfExists('phancongcv');
    }
}
