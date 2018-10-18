<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhvienLopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien_lop',function(Blueprint $table){
            $table->integer('sinhvien_id')->unsigned();
            $table->foreign('sinhvien_id')->references('id')->on('sinhvien');
            $table->integer('lop_id')->unsigned();
            $table->foreign('lop_id')->references('id')->on('lop');
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
        Schema::dropIfExists('sinhvien_lop');
    }
}
