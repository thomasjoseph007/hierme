<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feducation extends Model
{
    protected $table="tbl_feducation";
    protected $primarykey="f_eid";
    protected $fillable = ['fid','title','major','year' ];
}
