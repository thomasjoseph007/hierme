<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Tskill;
use App\Fskills;
use App\Feducation;
use App\Flanguage;
use App\Fawards;
use App\Fbasic;
use App\Users;
use Illuminate\Support\Facades\Redirect;

class FprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $file_path = 'uploads/';
        $proof1 = Input::file('image');
        $Proof1_name = time() . $proof1->getClientOriginalName();
        $proof1->move($file_path, $Proof1_name);
       
        $a=new Fbasic([
            'fid' => $request->get('id'),
            'image' => $Proof1_name,
            'description' => $request->get('description'),
        ]);
        $a->save();
       // return $request->all();
        $value = $request->get('langCounter');
        $id= $request->get('id');
     $language= array();
           $level= array();
            for($i=0;$i<=$value;$i++)
            {
                $language[$i]=$request->get('language'.$i);
                $level[$i]=$request->get('level'.$i);
            }
            $languages=implode(",",$language);
            $levels=implode(",",$level);
          $b=new Flanguage([
            'fid' => $request->get('id'),
           'language'=> $languages,
           'level'=> $levels,
          ]);
            $b->save();
            DB::select("UPDATE `users` SET `pcompleted` = '2' WHERE `id` = '$id' ");
            return redirect('/freelancer');
        }
        public function skills(Request $request)
        {   $value = $request->get('langCounter');
            $id= $request->get('id');
            $request->merge([
            'skills' => implode(',', (array)$request->get('skills'))
            ]); 
            $c=new Fskills([
                'fid' => $request->get('id'),
                'category' => $request->get('category'),
                'skills' => $request->get('skills'),
            ]);
            $c->save();
            $education = array();
            $major =array();
            $year = array();
            for($i=0;$i<=$value;$i++)
            {
                $education[$i] = $request->get('education'.$i);
                $major[$i] = $request->get('major'.$i);
                $year[$i] = $request->get('year'.$i);
            }
            $educations=implode(",",$education);
            $majors=implode(",",$major);
            $years=implode(",",$year);
            $d=new Feducation([
                'fid' => $request->get('id'),
                'title' => $educations,
                'major' =>$majors,
                'year' => $years,
            ]);
            $d->save();

            $award = array();
            $authority =array();
            $year = array();
            for($j=0;$j<=$value;$j++)
            {
               $award[$j] = $request->get('award');
               $authority[$j] =$request->get('authority');
               $year[$j] = $request->get('yearr');
            }
            $awards=implode(",",$award);
            $authorities=implode(",",$authority);
            $years=implode(",",$year);
          $e = new Fawards([
            'fid' => $request->get('id'),
            'award' => $awards,
            'authority' => $authorities,
            'year' => $years,
        ]);
        $e->save();
        DB::select("UPDATE `users` SET `pcompleted` = '1' WHERE `id` = '$id' ");
        return redirect('/freelancer');
    }
       
    
}
