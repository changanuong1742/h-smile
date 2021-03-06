<?php

namespace App\Http\Controllers\Backend;

use App\Models\Employee;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $services = Service::where('status',1)->where('category_id', '>', '0')->get();
        $roles = Role::orderBy('name')->get();
        return view('backend.employee.index',compact('roles','services'));
    }

    public function json()
    {
        $jsonObj['data'] = Employee::where('status','1')->orderBy('created_at', 'DESC')->get();
        echo json_encode($jsonObj);
    }

    public function add(Request $request)
    {
        if($request->password != $request->confirm_password) {
            $jsonObj['success'] = false;
            $jsonObj['msg'] = 'Mật khẩu không khớp';
            echo json_encode($jsonObj);
            return false;
        }
        $model = new Employee();
        $employee = $model->saveEmployee($model, $request);
        $user = new User();
        $data = [
            'employee' => $employee->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ];
        $result = $model->saveUser($user, $data);
        if($result){
            $jsonObj['success'] = true;
            $jsonObj['msg'] = 'Cập nhật dữ liệu thành công';
        } else {
            $jsonObj['success'] = false;
            $jsonObj['msg'] = 'Cập nhật dữ liệu không thành công';
        }
        echo json_encode($jsonObj);
    }

    public function loaddata(Request $request)
    {
        $id = $request->id;
        $employee = Employee::find($id);
        $user = User::where('employee', $id)->get();
        $employee['username'] = $user[0]['name'];
        $employee['rolesOfUser'] = User::findOrFail($user[0]['id'])->roles->pluck('id');
        echo json_encode($employee);
    }

    public function edit(Request $request)
    {
        if($request->password != $request->confirm_password) {
            $jsonObj['success'] = false;
            $jsonObj['msg'] = 'Mật khẩu không khớp';
            echo json_encode($jsonObj);
            return false;
        }
        $id = $request->input('id');
        $model = Employee::find($id);
        $user = User::where('employee',$model->id)->first();
        $userModel = User::find($user->id);
        $model->saveEmployee($model, $request);
        $userModel->email = $request->email;
        $userModel->name = $request->name;
        $userModel->password = bcrypt($request->password);
        $result = $userModel->save();
        if($result){
            $jsonObj['success'] = true;
            $jsonObj['msg'] = 'Cập nhật dữ liệu thành công';
        } else {
            $jsonObj['success'] = false;
            $jsonObj['msg'] = 'Cập nhật dữ liệu không thành công';
        }
        echo json_encode($jsonObj);
    }

    public function del(Request $request)
    {
        $id = $request->input('id');
        $model = Employee::find($id);
        $model->status = 0;
        $model->save();
        $user = User::where('employee', $id)->get();
        $user = User::find($user[0]['id']);
        $user->status = 0;
        if($user->save()){
            $jsonObj['success'] = true;
            $jsonObj['msg'] = 'Cập nhật dữ liệu thành công';
        } else {
            $jsonObj['success'] = false;
            $jsonObj['msg'] = 'Cập nhật dữ liệu không thành công';
        }
        echo json_encode($jsonObj);
    }
}
