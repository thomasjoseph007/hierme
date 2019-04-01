<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tk extends Model
{ 
    protected $table="tbl_task";
    protected $primaryKey="t_id";
    protected $fillable = [
    'id','tname','category','skills','date','minimum','maximum','ptype','files','description','status' 
    ];
}
