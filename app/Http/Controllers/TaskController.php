<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Tk;
use DB;
use App\Tskill;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view(employer . posttask);
    }
    public function store(Request $request)
    {
        $file_path = 'uploads/';
        $proof1 = Input::file('files');
        $Proof1_name = time() . $proof1->getClientOriginalName();
        $proof1->move($file_path, $Proof1_name);
        $request->merge([
            'skills' => implode(',', (array)$request->get('skills'))
        ]); 
        $a = new Tk([
            'id' => $request->get('id'),
            'tname' => $request->get('tname'),
            'category' => $request->get('category'),
            'tskills'=>$request->get('skills'),
            'date' => $request->get('date'),
            'minimum' => $request->get('minimum'),
            'maximum' => $request->get('maximum'),
            'ptype' => $request->get('ptype'),
            'tfiles' => $Proof1_name,
            'tdescription' => $request->get('description'),
            'status' => 'Active'
        ]);

        $a->save();
         return redirect('/ptask');
    }
}
