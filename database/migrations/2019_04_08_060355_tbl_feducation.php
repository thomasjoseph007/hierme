<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblFeducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feducation', function (Blueprint $table) {
            $table->bigincrements('f_eid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->string('title');
            $table->string('major');
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
        Schema::dropIfExists('tbl_feducation');
    }
}
