<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_task', function (Blueprint $table) {
            $table->bigIncrements('t_id');
            $table->biginteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->string('tname');
            $table->string('category');
            $table->string('skills');
            $table->string('date');
            $table->string('minimum');
            $table->string('maximum');
            $table->string('ptype');
            $table->string('files')->nullable();
            $table->string('description');
            $table->string('status');
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
        Schema::dropIfExists('tbl_task');
    }
}
