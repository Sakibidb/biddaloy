<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Str;
use Auth;
use Hash;


class ParentController extends Controller
{
    public function list()

    {
        $data['getRecord'] = User::getParent();
        $data['header_title'] = 'Parent List';
        return view('admin.parent.list', $data);
    }

    public function add()

    {
        $data['header_title'] = 'Add New Parent';
        return view('admin.parent.add', $data);
    }

    public function insert(Request $request)
    {

        request()->validate([
            'email'=> 'required|email|unique:users',
            'mobile_number'=> 'max:11|min:8',
            'address'=> 'max:255',
            'accupation'=> 'max:255',

        ]);

        $parents = new User;
        $parents->name = trim($request->name);
        $parents->last_name = trim($request->last_name);
        $parents->status = trim($request->status);
        $parents->gender = trim($request->gender);
        $parents->occupation = trim($request->occupation);
        $parents->address = trim($request->address);
        $parents->mobile_number = trim($request->mobile_number);
        if(!empty(($request->profile_pic)))
        {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('ymdhis').Str::random(30);
            $filename =strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/',$filename);

            $parents->profile_pic = $filename;

        }
        $parents->email = trim($request->email);
        $parents->password = Hash::make($request->password);
        $parents->user_type = 4;
        $parents->save();
        return redirect('admin/parent/list')->with('success', "Parent Successfully Added");
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
        $data['header_title'] = 'Parents List Edit';
        return view('admin.parent.edit', $data);
        }
        else
    {
        abort(404);
    }
        
    }

    public function update($id, Request $request)
    {
        request()->validate([
            'email'=> 'required|email|unique:users,email,'.$id,
            'mobile_number'=> 'max:11|min:8',
            'address'=> 'max:255',
            'accupation'=> 'max:255',

        ]);

        $parents = User::getSingle($id);
        $parents->name = trim($request->name);
        $parents->last_name = trim($request->last_name);
        $parents->status = trim($request->status);
        $parents->gender = trim($request->gender);
        $parents->occupation = trim($request->occupation);
        $parents->address = trim($request->address);
        $parents->mobile_number = trim($request->mobile_number);
        if(!empty(($request->profile_pic)))
        {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('ymdhis').Str::random(30);
            $filename =strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/',$filename);

            $parents->profile_pic = $filename;

        }
        $parents->email = trim($request->email);

        if(!empty($request->password))
        {
            $parents->password = Hash::make($request->password);
        }
        $parents->save();
        return redirect('admin/parent/list')->with('success', "Parent Successfully Updated"); 
    }

    public function delete($id)
    {
        $getRecord = User::getSingle($id);
        if(!empty($getRecord))
        {
            $getRecord ->is_delete = 1;
            $getRecord->save();
            return redirect('admin/parent/list')->with('success', "Parent Successfully Deleted");
        }
        else
        {
            abort(404);
        }
    }

    public function myStudent($id)
    {   
        $data['getParent'] = User::getSingle($id);
        $data['parent_id'] = $id;
        $data['getSearchStudent'] = User::getSearchStudent();
        $data['getRecord'] = User::getMyStudent($id);
        $data['header_title'] = 'Parent Student List';
        return view('admin.parent.my_student', $data);
    }

    public function AssignStudentParent($student_id, $parent_id)
    {
        $student = User::getSingle($student_id);
        $student->parent_id = $parent_id;
        $student->save();

        return redirect()->back()->with('success', "Student Successfully Assign to Parent");

    }
    
}
