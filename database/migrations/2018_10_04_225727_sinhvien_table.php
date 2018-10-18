<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien',function(Blueprint $table){
            $table->increments('id');
            $table->string('masv',50);
            $table->string('tensv',100);
            $table->boolean('gioitinh');
            $table->string('diachi',100);
            $table->string('sdt',30);
            $table->string('avata',150);
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
        schema::dropIfExists('sinhvien');
    }
}
