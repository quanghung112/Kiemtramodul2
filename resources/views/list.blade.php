@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Danh sách nhân viên </h1>
                <p>{{\Illuminate\Support\Facades\Session::get('success')}}</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Nhóm nhân viên</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($employees as $employee)
                        <tr>
                            <th class="align-middle" scope="row">{{$employee->id}}</th>
                            <td class="align-middle">{{$employee->department}}</td>
                            <td class="align-middle">{{$employee->name}}</td>
                            <td class="align-middle">{{$employee->sex}}</td>
                            <td class="align-middle">{{$employee->phone}}</td>
                            <td>
                                <a href="{{route('employee.update',$employee->id)}}"><button class="btn btn-primary" >Edit</button></a>
                                <a href="{{route('employee.delete',$employee->id)}}"><button class="btn btn-primary" onclick="return confirm('Bạn có muốn xóa nhân viên này?')">Delete</button></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Không có nhân viên nào</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$employees->appends(request()->query())}}
            </div>
        </div>
    </div>
@endsection
