<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUserPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_posts', function (Blueprint $table) {
            $table->bigincrements('pid');
            $table->biginteger('fid')->unsigned();
            $table->foreign('fid')->references('id')->on('users');
            $table->string('files');
            $table->string('comments');
            $table->string('pstatus');
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
       Schema::dropIfExists('tbl_user_posts');
    }
}
