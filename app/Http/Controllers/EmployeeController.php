<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    protected $departments;
    protected $sex;
    public function __construct()
    {
        $this->departments=['Lễ Tân','Nhân sự','Marketing','Tài chính','Dịch vụ','Quản lý dự án'];
        $this->sex=['Nam','Nữ'];
    }

    public function listEmployee()
    {
        $employees = Employee::paginate(5);
        return view('list', compact('employees'));
    }

    public function create()
    {
        $departments=$this->departments;
        $sex=$this->sex;
        return view('create',compact('departments','sex'));
    }

    public function find($id)
    {
        return Employee::findOrFail($id);
    }

    public function store(CreateEmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->id = $request->id;
        $employee->name = $request->name;
        $employee->sex = $request->sex;
        $employee->department = $request->department;
        $employee->birthday = $request->birthday;
        $employee->phone = $request->phone;
        $employee->CMND_number = $request->CMND;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        return redirect()->route('employee.list');
    }

    public function delete($id)
    {
        $employee = $this->find($id);
        $employee->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->back();
    }

    public function update($id)
    {
        $employee = $this->find($id);
        $departments=$this->departments;
        $sex=$this->sex;
        return view('update', compact('employee','departments','sex'));
    }

    public function upgrade(UpdateEmployeeRequest $request, $id)
    {
        $employee = $this->find($id);
        $employee->name = $request->name;
        $employee->sex = $request->sex;
        $employee->department = $request->department;
        $employee->birthday = $request->birthday;
        $employee->phone = $request->phone;
        $employee->CMND_number = $request->CMND;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        return redirect()->route('employee.list');
    }

    public function search(Request $request)
    {
        $employees = Employee::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        return view('list', compact('employees'));
    }
}
