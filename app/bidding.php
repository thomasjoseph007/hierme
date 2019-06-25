<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class bidding extends Model
{
    use Sortable;
    protected $table="tbl_bidding";
    protected $primarykey="bid";
    protected $fillable = ['fid','tid','rate','bcomments','time','dtype','bstatus','bidstatus','rating' ];
    public $timestamps = false;
   
}
