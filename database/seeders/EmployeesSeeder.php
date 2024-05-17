<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            DB::table('employees')->insert([
                [
                'name' => 'Huyền' ,
                'email' => 'employee@gmail.com'  ,
                'phone' => '123456789',
                'address' => 'Hồ Chí Minh' ,
                'password' => '123456' ,
                'sex' => 'female',
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ngọc',
                'email' => 'ngoc@gmail.com',
                'phone' => '987654321',
                'address' => 'Hồ Chí Minh',
                'password' => 'password1',
                'sex' => 'female',
         
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nam',
                'email' => 'nam@gmail.com',
                'phone' => '456123789',
                'address' => 'Hà Nội',
                'password' => 'password2',
                'sex' => 'male',
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anh',
                'email' => 'anh@gmail.com',
                'phone' => '321654987',
                'address' => 'Ninh Bình',
                'password' => 'password3',
                'sex' => 'male',
          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Linh',
                'email' => 'linh@gmail.com',
                'phone' => '654987321',
                'address' => 'Hồ Chí Minh',
                'password' => 'password4',
                'sex' => 'female',
      
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đức',
                'email' => 'duc@gmail.com',
                'phone' => '741852963',
                'address' => 'Hồ Chí Minh',
                'password' => 'password5',
                'sex' => 'male',
              
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thảo',
                'email' => 'thao@gmail.com',
                'phone' => '852963147',
                'address' => 'Hà Nội',
                'password' => 'password6',
                'sex' => 'female',
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trang',
                'email' => 'trang@gmail.com',
                'phone' => '369852147',
                'address' => 'Hồ Chí Minh',
                'password' => 'password7',
                'sex' => 'female',
           
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minh',
                'email' => 'minh@gmail.com',
                'phone' => '258741369',
                'address' => 'Hà Nội',
                'password' => 'password8',
                'sex' => 'male',
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
