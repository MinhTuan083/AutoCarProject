<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_types')->insert([
            'name' => 'SEDAN',
            'description' => 'Xe sedan phổ biến với thiết kế thân dài và hình dáng 3 hộp. Thường có 4 cửa và 5 chỗ ngồi.',
            'image' => 'sandanCar.jpg',
            'country' => 'Mỹ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'HATCHBACK',
            'description' => 'Hatchback có kiểu dáng tương tự như sedan nhưng có phần đuôi hình hộp. Cổng hậu mở lên như cánh hầm, cho phép dễ dàng truy cập khoang hành lý. Hatchback thường linh hoạt và phù hợp với đi lại trong thành phố hoặc xe gia đình.',
            'image' => 'HatchbackCar.png',
            'country' => 'Japan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'SUV',
            'description' => 'SUV (Sport Utility Vehicle) là loại xe khá đa dụng, kết hợp khả năng off-road với không gian rộng rãi và tiện nghi cho gia đình. Có kích thước lớn, độ cao từ mặt đất cao hơn xe hạng phổ thông.',
            'image' => 'SUVCar.jpg',
            'country' => 'Japan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'CUV',
            'description' => 'CUV là sự kết hợp giữa SUV và hatchback, thường được xây dựng trên nền tảng của sedan. Crossover thường nhẹ nhàng, tiết kiệm nhiên liệu và linh hoạt cho đi lại trong thành phố hoặc địa hình nhẹ.',
            'image' => 'CrossoverCar.jpg',
            'country' => 'Japan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'PICK-UP TRUCK',
            'description' => 'Pick-up truck là loại xe có khoang hành lý mở ở phía sau, thích hợp cho việc vận chuyển hàng hóa hoặc công việc nặng nhọc. Thường có khả năng chịu tải lớn và điều chỉnh linh hoạt.',
            'image' => 'Pick-upTruckCar.jpg',
            'country' => 'Mỹ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'Van/Minivan',
            'description' => 'Van/Minivan là phương tiện chở hành khách hoàn hảo, có không gian lớn và thoải mái. Phù hợp cho việc vận chuyển hành khách hoặc hàng hóa với dung tích lớn.',
            'image' => 'VanMinivanCar.jpg',
            'country' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'COUPLE',
            'description' => 'Coupe có kiểu dáng thể thao, thường chỉ có 2 cửa và được thiết kế để tạo cảm giác nhanh nhẹn và thể thao. Coupe thường có thiết kế gọn nhẹ và khả năng vận hành tốt.',
            'image' => 'CoupeCar.jpg',
            'country' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('car_types')->insert([
            'name' => 'CONVERTIBLE',
            'description' => 'Convertible là loại xe có thể gập mui nhanh chóng, biến xe từ mui cứng thành mui mềm. Thích hợp cho việc lái xe trong thời tiết đẹp và cung cấp trải nghiệm lái xe thú vị.',
            'image' => 'ConvertibleCar.jpg',
            'country' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('car_types')->insert([
            'name' => 'MPV',
            'description' => 'MPV là một loại xe hơi đa dụng, được thiết kế để có thể chở nhiều hành khách và hành lý, phù hợp cho cả mục đích sử dụng gia đình và thương mại.',
            'image' => 'mpv.jpg',
            'country' => 'Germany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
