<?php

namespace App\Http\Controllers;

use App\User;
use App\categories;
use App\skills;
use App\Tk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use DB;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = DB::table('users')->get();
        $category = DB::table('tbl_categories')->get();
        $skills= DB::table('tbl_skills')->get();
        $task= DB::table('tbl_task')->get();
        if (Auth::user()->pcompleted == 0) {
            return view('freelancer.fprofile', ['id' => $id]);
        } else if (Auth::user()->pcompleted == 2) {
                return view('freelancer.fdetails', ['id' => $id], ['category' => $category]);
            } else {
            return view('freelancer.fhome',['s_id' => $skills],['t_id' => $task]);
        }
    }
    public function cat($id)
    {
        $cat = DB::table('tbl_skills')->where("cat_id", $id)->get()->toJson();
        return $cat;
    }

    public function skillajax($id)
    {
        $subcat = skill::where("s_id", $id)->get()->toJson();
        return $subcat;
    }
    public function search()
    {
        $s = $_POST['query'];
        
        if ($s) {
            $task= DB::table('tbl_task')->select("tname")->where("tname", "like", '%'.$s.'%')->distinct('tname')->get();

            $output = '<ul >';
            
            foreach ($task as $row) {
                
                $output .= '
                <li class="load" >' . $row->tname . '</li>';
            }
            $output .= '</ul>';
            return $output;
        }
    }

    public function task_search(Request $request)
    {
        
        $title=$request->get('tname');
        $datas=Db::table('tbl_task')->where('tname',$title)->where('status','Active')->get();
        return $datas;
    }
    public function more_info($id)
    {
        
        $bid=DB::table('tbl_bidding')->where('fid',Auth::id())->where('tid',$id)->get()->count();
        

        
     $datas=Db::table('tbl_task')->where('t_id',$id)->get();
        $sk=array();
        $skil=[];
        $user=DB::table('tbl_fskills')->where('fid',Auth::id())->get()[0]->skills;
        $uskill= explode(",",$user);
       

        $rep = 0;
        foreach($datas as $d) 
        {
            // return $d->category;  
            $skillSet = "";
            $s=$d->tskills;
            $c=$d->category;
            $str_arr = explode (",", $s);
         for($i=0;$i<count($str_arr);$i++)
         {
            $skill=DB::table('tbl_skills')->where('s_id','=',$str_arr[$i])->get();
            
            foreach($uskill as $u)
            {
                if($str_arr[$i]==$u)
                {
                    $datas[$rep]->uskills = TRUE;
                }
            }
            foreach($skill as $row)
            {
                $skillSet .= $row->skill." | ";
            }

            $datas[$rep]->tskills = $skillSet;
         } 


         //category
          $category=DB::table('tbl_categories')->where('cat_id',$c)->get();
         $datas[$rep]->category = $category[0]->category;
         $rep++;
        }

      // return $datas;
        return view('freelancer.more_info')->with(compact('datas','bid'));
    }
}
