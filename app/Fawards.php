<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fawards extends Model
{
    protected $table="tbl_fawards";
    protected $primarykey="f_aid";
    protected $fillable = ['fid','award','authority','year' ];
}
