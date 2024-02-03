<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ClassController extends Controller
{
    public function list()
    {
        $data ['header_title'] = 'Class List';
        return view ('admin.class.list', $data);
    }

    public function add()
    {
        $data ['header_title'] = 'Add New Class';
        return view ('admin.class.add', $data);
    }

    public function insert(Request $request){
        //dd ($request->all());
        $save = new ClassModel;
        $save->name = $request->name;
        $save->status= $request->status;
        $save->created_by= Auth::user()->id;
        $save->save();

        return redirect()->with('success', 'Class added successfully');
    }
}
