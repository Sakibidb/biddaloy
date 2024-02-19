<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Str;

class TeacherController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getTracher();
        $data['header_title'] = "Teacher List";
        return view('admin.teacher.list', $data);
    }

    public function add()

    {
        $data['header_title'] = 'Teacher List';
        return view('admin.teacher.add', $data);
    }
    public function insert(Request $request)
    {

        request()->validate([
            'email'=> 'required|email|unique:users',
            'mobile_number'=> 'max:11|min:8',
            'marital_status'=> 'max:50',

        ]);

        $teacher = new User;
        $teacher->name = trim($request->name);
        $teacher->last_name = trim($request->last_name);
        $teacher->status = trim($request->status);
        $teacher->gender = trim($request->gender);
        if(!empty($request->joining_date))
        {
            $teacher->joining_date = trim($request->joining_date);

        }
        $teacher->note = trim($request->note);
        $teacher->religion = trim($request->religion);
        $teacher->mobile_number = trim($request->mobile_number);
        $teacher->qualification = trim($request->qualification);
        $teacher->work_experince = trim($request->work_experince);
        if(!empty(($request->profile_pic)))
        {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('ymdhis').Str::random(30);
            $filename =strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/',$filename);

            $teacher->profile_pic = $filename;

        }
        $teacher->current_address = trim($request->current_address);
        $teacher->permanent_address = trim($request->permanent_address);
        $teacher->marital_status = trim($request->marital_status);
        $teacher->email = trim($request->email);
        $teacher->password = Hash::make($request->password);
        $teacher->user_type = 2;
        $teacher->save();
        return redirect('admin/teacher/list')->with('success', "Teacher Successfully Added");
    }
}
