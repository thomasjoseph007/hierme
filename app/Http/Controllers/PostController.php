<?php

namespace App\Http\Controllers;

use App\User;
use App\categories;
use App\skills;
use App\Tk;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use DB;


class PostController extends Controller
{
    public function post()
    {
        return view('freelancer.post');
    }
    public function upload(Request $request)
    {

         $file_path = 'uploads/';  
         $proof1 = $request->file('image');
         $Proof1_name = time().'-'.$proof1->getClientOriginalName();   
         $proof1->move($file_path, $Proof1_name);
         $post= new Posts([
            'fid' => $request->get('fid'),
            'files' => $Proof1_name,
            'comments' => $request->get('comments'),
            'pstatus' =>'0'
        ]);
        $post->save();
        return redirect('/freelancer');
    }
    public function view_post()
    {
        $data=DB::table('tbl_user_posts')->get();
        foreach($data as $id)
        {
            $uid= $id->fid;
        }
        $datas=DB::table('tbl_user_posts')->where('fid',$uid)->get();
        return view('freelancer.manage_post',compact('datas'))  ;
    }
    public function manage_task()
    {
        $data=DB::table('tbl_posts')->get();
        foreach($data as $id)
        {
            $uid= $id->id;
        }
        $datas=Db::table('tbl_posts')->where('id',$uid)->get();
        foreach ($datas as $d) {
            if ($d->pstatus== '0') {
            DB::select("UPDATE `tbl_posts` SET `pstatus` = '1' WHERE `fid` = '$id' ");
                return back()->with('warning', 'task blocked or deleted!');
            }
        }
    }
}
