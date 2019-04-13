<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flanguage extends Model
{
    protected $table="tbl_flanguage";
    protected $primarykey="f_lid";
    protected $fillable = ['fid','language','level'];
}
