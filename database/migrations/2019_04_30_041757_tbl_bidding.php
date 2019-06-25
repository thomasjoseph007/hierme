<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblBidding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bidding', function (Blueprint $table) {
            $table->bigincrements('bid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->bigInteger('tid',)->unsigned();
            $table->foreign('tid')->references('t_id')->on('tbl_task');
            $table->string('rate');
            $table->string('bcomments');
            $table->string('time');
            $table->string('dtype');
            $table->string('bstatus');
            $table->string('bidstatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bidding');
    }
}
