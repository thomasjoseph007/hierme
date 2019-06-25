<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table="tbl_user_posts";
    protected $primarykey="pid";
    protected $fillable = ['fid','files','comments','pstatus' ];
    public $timestamps = false;
}
