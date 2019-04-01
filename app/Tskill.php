<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tskill extends Model
{
    protected $table="tbl_task_skill";
    protected $primarykey="t_sid";
    protected $fillable = ['uid','tid','skill' ];
    public $timestamps = false;
}
