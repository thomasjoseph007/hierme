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

class BidController extends Controller
{
   public function bid(Request $request)
   {
       $bid=new bidding([
        'fid' => $request->get('uid'),
        'tid' => $request->get('tid'),
        'rate' => $request->get('rate'),
        'bcomments' => $request->get('comments'),
        'time' => $request->get('time'),
        'dtype' =>$request->get('dtype'),
        'bstatus' => 'NotApproved',
        'bidstatus' => '0'
       ]);
       $bid->save(); 
       return redirect('/freelancer'); 
   }
   public function bidinfo()
   {

        //$data=DB::select(SELECT * FROM `tbl_bidding` as a JOIN `tbl_task` as b ON a.tid = b.t_id JOIN users as c ON c.id = a.fid)
        $eid=Auth::user()->id;

       $bid  =DB::table('tbl_bidding')
                ->join('tbl_task','tbl_bidding.tid','=','tbl_task.t_id')
                ->join('users','tbl_bidding.fid','=','users.id')->where('tbl_task.id',$eid)->where('tbl_bidding.bstatus','!=','Deleted')->get();
         // return  count($bid);

                return view('employer.bid_info',compact('bid'));

        ;
   }
   public function edit_bids(Request $request)
   {
        $id= $request->get('uid');
        $tid = $request->get('tid');
        $rate = $request->get('rate');
        $bcomments = $request->get('comments');
        $time = $request->get('time');
        $dtype = $request->get('dtype');
       
        $bids = DB::table('tbl_bidding')->where('fid',$id)->where('tid',$tid)->get();
        
        foreach ($bids as $a) {
            if ($a->bstatus=='Waiting' ) {
          DB::select("UPDATE `tbl_bidding` SET `rate` = '$rate',`bcomments` ='$bcomments',`time`='$time',`dtype`='$dtype' WHERE `fid` = '$id'and `tid`= '$tid' ");                          
        }
    }
    return redirect('/freelancer');
   }
   public function bid_compare()
   {
    
    $eid=Auth::user()->id;
    $bid  =DB::table('tbl_bidding')
            ->join('tbl_task','tbl_bidding.tid','=','tbl_task.t_id')
            ->join('users','tbl_bidding.fid','=','users.id')->where('tbl_task.id',$eid)->where('tbl_bidding.rating',0)->get();
            
       return view('employer.bid_compare',compact('bid'));

   }
   public function compare1($compare1)
   {

        $datas=DB::select("SELECT * FROM `tbl_bidding` as a JOIN `tbl_fbasic` as b ON a.fid = b.fid JOIN users as c ON c.id=a.fid JOIN tbl_user_posts as d ON d.fid=a.fid JOIN tbl_fskills as e on e.fid=a.fid JOIN tbl_task as f on a.tid=f.t_id where a.fid='$compare1'");
   
        $sk=array();
        $skil=[];

        foreach($datas as $d) 
        {
            $skillSet = "";
            $s=$d->skills;
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
        $name=$datas[0]->title;
        $type=$datas[0]->major;
        $year=$datas[0]->year;
      
        $a=explode (",", $name);
        $b=explode(",",$type);
        $c=explode(",",$year);
        $v=0;
        foreach($c as $d)
        {
          $q[] = $a[$v]." - ". $b[$v]. " - ". $d;
            $v++;
            
        }
        //return $q;
       $datas[0]->sk = $q;

            return $datas;
   }
   public function compare2($compare)
   {
    
    $eid=Auth::user()->id;
    $datas=DB::select(" SELECT * FROM `tbl_bidding` as a JOIN `tbl_fbasic` as b ON a.fid = b.fid JOIN users as c ON c.id=a.fid JOIN tbl_user_posts as d ON d.fid=a.fid JOIN tbl_fskills as e on e.fid=a.fid JOIN tbl_task as f on a.tid=f.t_id where a.fid='$compare' and a.rating=0 and f.id='$eid'");
       
    $sk=array();
    $skil=[];

    foreach($datas as $d) 
    {
        $skillSet = "";
        $s=$d->skills;
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
        return $datas;
   }
   public function rating(Request $request)
   {
    $eid=Auth::user()->id;
        $id= $request->get('rate');
        $tid=$request->get('tid');
        $star=$request->get('star');

        $bids = DB::table('tbl_bidding')->where('fid',$id)->where('tid',$tid)->get();
        
        foreach ($bids as $a) {
            if ($a->rating== 0) {
            DB::select("UPDATE `tbl_bidding` SET `rating` = $star WHERE `fid` = '$id'and `tid`= '$tid' ");                          
        }
    }
    return redirect('/employer');
   }
   public function bid_rating()
   {
        $eid=Auth::user()->id;
        $bid  =DB::table('tbl_bidding')
                ->join('tbl_task','tbl_bidding.tid','=','tbl_task.t_id')
                ->join('users','tbl_bidding.fid','=','users.id')
                ->join('tbl_fskills','tbl_bidding.fid','=','tbl_fskills.fid')
                ->where('tbl_task.id',$eid)->where('tbl_bidding.rating','!=',0)
                ->orderBy('tbl_bidding.rating','desc')->get();

        $sk=array();
        $skil=[];

        foreach($bid as $d) 
        {
            $skillSet = "";
            $s=$d->skills;
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
         return view('employer.bidaproved',compact('bid'));

    }
   public function request($id,$tid)
   {
        $bids = DB::table('tbl_bidding')->where('fid',$id)->where('tid',$tid)->get();
        
        foreach ($bids as $a) {
            if ($a->bstatus== 'Waiting') {
            DB::select("UPDATE `tbl_bidding` SET `bstatus` = 'Requested' WHERE `fid` = '$id'and `tid`= '$tid' ");
            
        }
    }
    $message = "Success! Your Request has been sent successfully.";
    return view('employer.bidaproved',compact('message'));               
    }
    public function delete($id,$tid)
    {
        $bid=DB::delete("delete from 'tbl_bidding WHERE `fid` = '$id' and `tid`='$tid' ");
        return redirect('/employer'); 

    }
  
   
   public function bidaproved()
   {
        $bid  =DB::select("SELECT * FROM `tbl_bidding` as a JOIN `tbl_task` as b ON a.tid = b.t_id JOIN users as c ON c.id = a.fid where a.bstatus='Waiting'");
        $sk=array();
        $skil=[];

        foreach($bid as $d) 
        {
            $skillSet = "";
            $s=$d->skills;
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
           
        }     return view('employer.bidaproved',compact('bid'));
   }
        //freelancer biding 
   public function views()
    {
        $eid=Auth::user()->id;
        $bid  =DB::select("SELECT * FROM `tbl_bidding` as a JOIN `tbl_task` as b ON a.tid = b.t_id JOIN users as c ON c.id = a.fid where a.fid=$eid and a.bstatus='Waiting'");
      $sk=array();
      $skil=[];

      foreach($bid as $d) 
      {
          $skillSet = "";
          $s=$d->skills;
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
        return view('freelancer.bid_info',compact('bid'));
    }
    //delete bid by freelancer
    public function fmanage_bids($id,$tid)
    {
        $bid=DB::delete("delete from 'tbl_bidding WHERE `fid` = '$id' and `tid`='$tid' ");
        return redirect('/freelancer'); 
    }
    public function fapproved_bids()
    {
        $eid=Auth::user()->id;
      $bid  =DB::select("SELECT * FROM `tbl_bidding` as a JOIN `tbl_task` as b ON a.tid = b.t_id JOIN users as c ON c.id = a.fid where a.fid=$eid and (a.bstatus='Requested' or a.bstatus='Confirmed')");
        $sk=array();
        $skil=[];

      foreach($bid as $d) 
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
        return view('freelancer.view_aprovedbids',compact('bid'));
    }
    public function cofirm_page($id,$tid)
    {
        $eid=Auth::user()->id;
       $bid  =DB::select("SELECT * FROM `tbl_bidding` as a JOIN `tbl_task` as b ON a.tid = b.t_id JOIN users as c ON c.id = a.fid where a.fid=$eid and a.bstatus='Requested'");
        $sk=array();
        $skil=[];

      foreach($bid as $d) 
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
        return view('freelancer.confirm_page',compact('bid'));
    }
    public function confirmed_bid($tid)
    {
        $eid=Auth::user()->id;
        $bids = DB::table('tbl_bidding')->where('fid',$eid)->where('tid',$tid)->where('fid',$eid)->get();
        
        foreach ($bids as $a) {
            if ($a->bstatus== 'Requested') {
            DB::select("UPDATE `tbl_bidding` SET `bstatus` = 'Confirmed' WHERE `fid` = '$eid'and `tid`= '$tid' ");              
        }
        }
        return redirect('/freelancer');
    }
    public function discard_bid($tid)
    {
        $eid=Auth::user()->id;
        $bids = DB::table('tbl_bidding')->where('fid',$eid)->where('tid',$tid)->where('fid',$eid)->get();
        
        foreach ($bids as $a) {
            if ($a->bstatus== 'Requested') {
            DB::select("UPDATE `tbl_bidding` SET `bstatus` = 'Deleted' WHERE `fid` = '$eid'and `tid`= '$tid' ");                      
        }
        }
        return redirect('/freelancer');
    }
    public function edit_bid($tid)
    {
       $eid=Auth::user()->id;
       $bids = DB::table('tbl_bidding')->where('fid',$eid)->where('tid',$tid)->where('bstatus','Waiting')->get();
        return view('freelancer.edit_bid',compact('bids'));
        
    }
}
