<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'name' => 'CAMRY',
            'brand' => 'TOYOTA',
            'model' => '2.0Q',
            'year' => '2024',
            'price' => '1105000000',
            'description' => 'Toyota Camry 2024 là một mẫu sedan cỡ trung đẳng cấp, chiếc xe gắn liền với nhiều cơ quan công quyền với không gian rộng, nhiều trang bị tiện nghị cho hàng ghế thứ hai, doanh số mẫu này luôn ổn định mặc dù có giai đoạn đi xuống nhưng Camry vẫn là mẫu xe được yêu thích trong phân khúc sedan cỡ D.',
            'image' => '../images/camry.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'CAMRY',
            'brand' => 'TOYOTA',
            'model' => '2.0Q',
            'year' => '2024',
            'price' => '1105000000',
            'description' => 'Toyota Camry 2024 là một mẫu sedan cỡ trung đẳng cấp, chiếc xe gắn liền với nhiều cơ quan công quyền với không gian rộng, nhiều trang bị tiện nghị cho hàng ghế thứ hai, doanh số mẫu này luôn ổn định mặc dù có giai đoạn đi xuống nhưng Camry vẫn là mẫu xe được yêu thích trong phân khúc sedan cỡ D.',
            'image' => '../images/camry.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'CAMRY',
            'brand' => 'TOYOTA',
            'model' => '2.0Q',
            'year' => '2024',
            'price' => '1105000000',
            'description' => 'Toyota Camry 2024 là một mẫu sedan cỡ trung đẳng cấp, chiếc xe gắn liền với nhiều cơ quan công quyền với không gian rộng, nhiều trang bị tiện nghị cho hàng ghế thứ hai, doanh số mẫu này luôn ổn định mặc dù có giai đoạn đi xuống nhưng Camry vẫn là mẫu xe được yêu thích trong phân khúc sedan cỡ D.',
            'image' => '../images/camry.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'CAMRY',
            'brand' => 'TOYOTA',
            'model' => '2.0Q',
            'year' => '2024',
            'price' => '1105000000',
            'description' => 'Toyota Camry 2024 là một mẫu sedan cỡ trung đẳng cấp, chiếc xe gắn liền với nhiều cơ quan công quyền với không gian rộng, nhiều trang bị tiện nghị cho hàng ghế thứ hai, doanh số mẫu này luôn ổn định mặc dù có giai đoạn đi xuống nhưng Camry vẫn là mẫu xe được yêu thích trong phân khúc sedan cỡ D.',
            'image' => '../images/camry.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
    }
}
