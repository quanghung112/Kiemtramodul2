<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->name = 'Lê Thanh Hải';
        $employee->sex = 'Nam';
        $employee->department = 'Nhân sự';
        $employee->birthday = '1970/12/20';
        $employee->phone = '0987547323';
        $employee->CMND_number = '03746738627';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Lê Thị Liên';
        $employee->sex = 'Nữ';
        $employee->department = 'Tài chính';
        $employee->birthday = '1980/12/20';
        $employee->phone = '0987547222';
        $employee->CMND_number = '0374632145';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Lê Thanh Đăng';
        $employee->sex = 'Nam';
        $employee->department = 'Nhân sự';
        $employee->birthday = '1970/10/20';
        $employee->phone = '092134652';
        $employee->CMND_number = '0376565443';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Lê Thanh Huyền';
        $employee->sex = 'Nữ';
        $employee->department = 'Lễ Tân';
        $employee->birthday = '1990/12/01';
        $employee->phone = '092154652';
        $employee->CMND_number = '03124654233';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Lê Huyền Trang';
        $employee->sex = 'Nữ';
        $employee->department = 'Dịch vụ';
        $employee->birthday = '1993/06/20';
        $employee->phone = '0954543323';
        $employee->CMND_number = '03563423434';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();

        $employee = new Employee();
        $employee->name = 'Lê Thanh Nam';
        $employee->sex = 'Nam';
        $employee->department = 'Nhân sự';
        $employee->birthday = '1970/12/20';
        $employee->phone = '0986546762';
        $employee->CMND_number = '0374324567';
        $employee->email = 'Employee@gmail.com';
        $employee->address = 'Ba Đình, Hà Nội';
        $employee->save();
    }
}
