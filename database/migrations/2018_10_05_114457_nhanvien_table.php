<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien',function(Blueprint $table){
            $table->increments('id');
            $table->string('manv',50);
            $table->string('tennv',100);
            $table->Boolean('gioitinh');
            $table->string('email',150)->unique();
            $table->string('password',150);
            $table->string('diachi',100);
            $table->string('sdt',50);
            $table->string('avata',150);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
