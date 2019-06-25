<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblApproveBids extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_approve_bids', function (Blueprint $table) {
            $table->bigincrements('a_bid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->bigInteger('tid')->unsigned();
            $table->foreign('tid')->references('t_id')->on('tbl_task');
            $table->bigInteger('bid')->unsigned();
            $table->foreign('bid')->references('bid')->on('tbl_bidding');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
