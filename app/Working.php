<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

   public static function getuserData($id=null){

     $value=DB::table('tbl_working')->orderBy('wid', 'asc')->get(); 
     return $value;

   }

   public static function insertData($data){

     $value=DB::table('tbl_working')->where('award', $data['awarrd'])->get();
     if($value->count() == 0){
       $insertid = DB::table('tbl_working')->insertGetId($data);
       return $insertid;
     }else{
       return 0;
     }

   }

   public static function updateData($id,$data){
      DB::table('users')->where('id', $id)->update($data);
   }

   public static function deleteData($id=0){
      DB::table('users')->where('id', '=', $id)->delete();
   }

}