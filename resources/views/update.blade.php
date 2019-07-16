@extends('layout')

@section('content')
    <div class="container">
        <h2>Cập nhật thông tin </h2>
        <div class="col-12">
            <div class="row">
                <form action="{{route('employee.upgrade',$employee->id)}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số điện thoại</label>
                            <input type="number" class="form-control" value="{{$employee->phone}}" name="phone"
                                   required>
                        </div>
                        <d class="text-danger">
                            @if($errors->has('phone'))
                                *{{$errors->first('phone')}}
                            @endif
                        </d>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhóm nhân viên</label>
                            <select class="form-control" name="department">
                                @foreach($departments as $department)
                                    @if ($department==$employee->department)
                                        <option value="{{$department}}" selected>{{$department}}</option>
                                    @else
                                        <option value="{{$department}}">{{$department}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <d class="text-danger">
                                @if($errors->has('department'))
                                    *{{$errors->first('department')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số CMND</label>
                            <input type="number" class="form-control" value="{{$employee->CMND_number}}" name="CMND"
                                   required>
                            <d class="text-danger">
                                @if($errors->has('CMND'))
                                    *{{$errors->first('CMND')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Họ tên</label>
                            <input type="text" class="form-control" value="{{$employee->name}}" name="name" required>
                            <d class="text-danger">
                                @if($errors->has('name'))
                                    *{{$errors->first('name')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" value="{{$employee->email}}" name="email" required>
                            <d class="text-danger">
                                @if($errors->has('email'))
                                    *{{$errors->first('email')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Ngày sinh</label>
                            <input type="date" class="form-control" name="birthday" value="{{$employee->birthday}}"
                                   required>
                            <d class="text-danger">
                                @if($errors->has('birthday'))
                                    *{{$errors->first('birthday')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Địa chỉ</label>
                            <textarea class="form-control" name="address" required>{{$employee->address}}</textarea>
                            <d class="text-danger">
                                @if($errors->has('address'))
                                    *{{$errors->first('address')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhóm nhân viên</label>
                            <select class="form-control" name="sex">
                                @foreach($sex as $value)
                                    @if ($value==$employee->sex)
                                        <option value="{{$value}}" selected>{{$value}}</option>
                                    @else
                                        <option value="{{$value}}" >{{$value}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <d class="text-danger">
                                @if($errors->has('sex'))
                                    *{{$errors->first('sex')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Upgrade</button>
                    <button type="reset" class="btn btn-primary">Hoàn Tác</button>
                </form>
            </div>
        </div>
    </div>
@endsection

