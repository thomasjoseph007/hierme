<?php

namespace App\Http\Controllers;


use App\User;
use App\categories;
use App\skills;
use App\Tk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('employer.ehome');
    }
    public function task()
    {
        $id=DB::table('users')->get();
        $category = DB::table('tbl_categories')->get();
        return view('employer.posttask',['id' => $id],['category' => $category]);
        
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
    public function managetask()
    {
        
        $eid=Auth::user()->id;
        $datas=Db::table('tbl_task')->where('id',$eid)->get();
        $sk=array();
        $skil=[];

        foreach($datas as $d) 
        {
            $skillSet = "";
            $s=$d->tskills;
            $str_arr = explode (",", $s);
         for($i=0;$i<count($str_arr);$i++)
         {
            $skill=DB::table('tbl_skills')->where('s_id','=',$str_arr[$i])->get();
            
            
            foreach($skill as $row)
            {
                $skillSet .= $row->skill." | ";
            }

            $d->skills = $skillSet;
         } 
           
        }     
        return view('employer.manage_task')->with(compact('datas'));
    }
    public function blocktask($id)
    {   
         $eid=Auth::user()->id;
        $task = DB::table('tbl_task')->where('id',$eid)->get();
        
        foreach ($task as $a) {
            if ($a->status== 'Active') {
            DB::select("UPDATE `tbl_task` SET `status` = 'InActive' WHERE `t_id` = '$id' ");
                return back()->with('warning', 'task blocked or deleted!');
            }
            if ($a->status== 'InActive') {
                DB::select("UPDATE `tbl_task` SET `status` = 'Active' WHERE `t_id` = '$id' ");
                    return back()->with('warning', 'task blocked or deleted!');
                }
        }
    }
}
//SELECT * FROM `tbl_task` as a JOIN `tbl_task_skill` as b ON a.t_id = b.tid JOIN tbl_skills as c ON c.s_id = b.skill