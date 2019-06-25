<?php

namespace App\Http\Controllers;

use App\User;
use App\categories;
use App\skills;
use App\Tk;
use App\bidding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use DB;
use Illuminate\Support\Facades\DB as IlluminateDB;
use Symfony\Component\Console\Input\Input;
use Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index() 
    {
        
        $users = DB::select("SELECT * FROM `users` WHERE `utype` = 'freelancer' OR `utype` = 'employer'");
        return view('admin.index',compact('users'));    
    }
    public function block($id)
    {
     
       $user = DB::table('users')->where('id',$id)->get();
        
        foreach ($user as $a) {
            if ($a->status== '1') {
            DB::select("UPDATE `users` SET `status` = '0' WHERE `id` = '$id' ");
                return back()->with('warning', 'task blocked or deleted!');
            }
            if ($a->status== '0') {
                DB::select("UPDATE `users` SET `status` = '1' WHERE `id` = '$id' ");
                    return back()->with('warning', 'task blocked or deleted!');
                }
        }
     
        return redirect('/admin'); 
    }
}
