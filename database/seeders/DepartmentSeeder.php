<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chinhanh')->insert([
            [
                'name' => 'A',
                'diachi' => '123 Example Street',  // Example address, replace with actual data
                'phone' => '1234567890',           // Example phone number, replace with actual data
                'image' => 'sandanCar.jpg',
                'des' => 'abc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B',
                'diachi' => '456 Example Avenue',
                'phone' => '2345678901',
                'image' => 'carB.jpg',
                'des' => 'def.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'C',
                'diachi' => '789 Example Boulevard',
                'phone' => '3456789012',
                'image' => 'carC.jpg',
                'des' => 'ghi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D',
                'diachi' => '101 Example Drive',
                'phone' => '4567890123',
                'image' => 'carD.jpg',
                'des' => 'jkl.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'E',
                'diachi' => '202 Example Lane',
                'phone' => '5678901234',
                'image' => 'carE.jpg',
                'des' => 'mno.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'F',
                'diachi' => '303 Example Road',
                'phone' => '6789012345',
                'image' => 'carF.jpg',
                'des' => 'pqr.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'G',
                'diachi' => '404 Example Street',
                'phone' => '7890123456',
                'image' => 'carG.jpg',
                'des' => 'stu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'H',
                'diachi' => '505 Example Avenue',
                'phone' => '8901234567',
                'image' => 'carH.jpg',
                'des' => 'vwx.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'I',
                'diachi' => '606 Example Boulevard',
                'phone' => '9012345678',
                'image' => 'carI.jpg',
                'des' => 'yz.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'J',
                'diachi' => '707 Example Drive',
                'phone' => '0123456789',
                'image' => 'carJ.jpg',
                'des' => 'abc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'K',
                'diachi' => '808 Example Lane',
                'phone' => '1234567890',
                'image' => 'carK.jpg',
                'des' => 'def.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
