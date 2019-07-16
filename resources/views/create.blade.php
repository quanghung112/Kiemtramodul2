@extends('layout')

@section('content')
    <div class="container">
        <h2>Thêm mới nhân viên </h2>
        <div class="col-12">
            <div class="row">
                <form action="{{route('employee.store')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Mã nhân viên</label>
                            <input type="text" class="form-control" name="id" required>
                            <d class="text-danger">
                                @if($errors->has('id'))
                                    *{{$errors->first('id')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" required>
                            <d class="text-danger">
                                @if($errors->has('phone'))
                                    *{{$errors->first('phone')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhóm nhân viên</label>
                            <select class="form-control" name="department">
                                @foreach($departments as $department)
                                    <option value="{{$department}}">{{$department}}</option>
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
                            <input type="number" class="form-control" name="CMND" required>
                        </div>
                        <d class="text-danger">
                            @if($errors->has('CMND'))
                                *{{$errors->first('CMND')}}
                            @endif
                        </d>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Họ tên</label>
                            <input type="text" class="form-control" name="name" required>
                            <d class="text-danger">
                                @if($errors->has('name'))
                                    *{{$errors->first('name')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" name="email" required>
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
                            <input type="date" class="form-control" name="birthday" required>
                            <d class="text-danger">
                                @if($errors->has('birthday'))
                                    *{{$errors->first('birthday')}}
                                @endif
                            </d>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Địa chỉ</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        <d class="text-danger">
                            @if($errors->has('address'))
                                *{{$errors->first('address')}}
                            @endif
                        </d>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhóm nhân viên</label>
                            <select class="form-control" name="sex">
                                @foreach($sex as $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                            </select>
                            <d class="text-danger">
                                @if($errors->has('sex'))
                                    *{{$errors->first('sex')}}
                                @endif
                            </d>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-primary">Hoàn Tác</button>
                </form>
            </div>
        </div>
    </div>
@endsection

