<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fskills extends Model
{
    protected $table="tbl_fskills";
    protected $primarykey="f_sid";
    protected $fillable = ['fid','category','skills' ];
}