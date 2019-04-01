<?php

namespace App\Http\Controllers;

use App\User;
use App\categories;
use App\skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=DB::table('users')->get();
        $category = DB::table('tbl_categories')->get();
        if (Auth::user()->pcompleted == 0) {
            return view('freelancer.fprofile',['id' => $id],['category' => $category]);
        } else {
            return view('freelancer.fhome');
        }
    }
    public function cat($id)
    {
        $cat =DB::table('tbl_skills')->where("cat_id",$id)->get()->toJson();
        return $cat;
    }

    public function skillajax($id)
    {
        $subcat = skill::where("s_id",$id)->get()->toJson();
        return $subcat;
    }
}
