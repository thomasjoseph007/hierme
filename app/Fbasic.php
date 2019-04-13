<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbasic extends Model
{
    protected $table="tbl_fbasic";
    protected $primarykey="f_bid";
    protected $fillable = ['fid','image','description' ];
}
