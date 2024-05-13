<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        //php artisan db:seed --class=BrandSeeder			

    public function run(): void
    {
        //
        DB::table('brands')->insert([
            'name' => 'TOYOTA',
            'country' => 'JAPAN',
            'founded_year' => '1937',
            'description' => 'TOYOTA là một công ty sản xuất ô tô đa quốc gia có trụ sở chính tại Nhật Bản. Tên gọi "TOYOTA" được viết bằng ký tự kanji là "豊田" và phiên âm là "Tōyōta". Công ty được thành lập vào năm 1937 bởi Kiichiro Toyoda và trở thành một trong những nhà sản xuất ô tô lớn nhất thế giới.',
            'logo' => '../logos/toyotalogo.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'HYUNDAI ',
            'country' => 'KOREA',
            'founded_year' => '1967',
            'description' => 'Hyundai (Hyundai Motor Company) là một công ty sản xuất ô tô đa quốc gia có trụ sở chính tại Hàn Quốc. Công ty được thành lập vào năm 1967 bởi ông Chung Ju-Yung và trở thành một trong những nhà sản xuất ô tô lớn nhất trên thế giới.',
            'logo' => '../logos/huyndailogo.jpg',
        ]);
        DB::table('brands')->insert([
            'name' => 'KIA ',
            'country' => 'KOREA',
            'founded_year' => '1944',
            'description' => 'KIA là một công ty sản xuất ô tô đa quốc gia có trụ sở chính tại Seoul, Hàn Quốc. Công ty được thành lập vào năm 1944 bởi ông Chung Ju-Yung và trở thành một trong những nhà sản xuất ô tô lớn nhất trên thế giới.',
            'logo' => '../logos/kialogo.jpg',
        ]);
        DB::table('brands')->insert([
            'name' => 'MITSUBISHI ',
            'country' => 'JAPAN',
            'founded_year' => '1870',
            'description' => 'Mitsubishi Motors Corporation là một công ty con của tập đoàn Mitsubishi và là một trong những nhà sản xuất ô tô lớn nhất tại Nhật Bản. Công ty này thành lập vào năm 1970 và sản xuất và kinh doanh một loạt các loại ô tô, bao gồm các dòng xe hạng nhẹ, xe thể thao, xe địa hình và xe điện.',
            'logo' => '../logos/mitsubishilogo.png',
        ]);
        DB::table('brands')->insert([
            'name' => 'NISSAN ',
            'country' => 'JAPAN',
            'founded_year' => '1933',
            'description' => 'Nissan là một nhà sản xuất ô tô đa quốc gia có trụ sở tại Nhật Bản. Công ty này được thành lập vào năm 1933 bởi người sáng lập là ông Yoshisuke Aikawa và là một trong những nhà sản xuất ô tô lớn nhất trên thế giới',
            'logo' => '../logos/nissanlogo.png',
        ]);
    }
}
