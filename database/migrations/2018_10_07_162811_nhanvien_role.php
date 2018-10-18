<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanvienRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien_role',function(Blueprint $table){
            $table->increments('id');
            $table->integer('nhanvien_id')->unsigned();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien_role');
    }
}
