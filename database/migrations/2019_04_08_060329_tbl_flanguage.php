<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblFlanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_flanguage', function (Blueprint $table) {
            $table->bigincrements('f_lid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->string('language');
            $table->string('level');
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
        Schema::dropIfExists('tbl_flanguage');
    }
}
