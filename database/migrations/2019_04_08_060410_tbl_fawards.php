<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblFawards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_fawards', function (Blueprint $table) {
            $table->bigincrements('f_aid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->string('award');
            $table->string('authority');
            $table->string('year');
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
        Schema::dropIfExists('tbl_fawards');
    }
}