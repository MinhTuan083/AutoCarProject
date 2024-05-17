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
    //php artisan db:seed --class=CarSeeder
    //php artisan db:seed --class=BrandSeeder			
    //php artisan db:seed --class=CarTypesSeeder			
    //php artisan db:seed --class=EmployeesSeeder			
    //php artisan db:seed --class=InvoicesSeeder			

    public function run(): void
    {
        DB::table('cars')->insert([
            'name' => 'CAMRY',
            'brand' => 'TOYOTA',
            'cartype' => 'SEDAN',
            'model' => '2.0Q',
            'year' => '2024',
            'price' => '1105000000',
            'description' => 'Toyota Camry - sedan đáng tin cậy và phổ biến. Với động cơ mạnh mẽ, tiết kiệm nhiên liệu và thiết kế sang trọng, Camry hấp dẫn với dải đèn LED sáng bóng và nội thất tinh tế. Hệ thống giải trí và an toàn hiện đại, kết hợp với tính năng kết nối thông minh, làm cho Camry trở thành lựa chọn hàng đầu trong phân khúc sedan.            ',
            'image' => '../images/camry.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'COROLLA ALTIS ',
            'brand' => 'TOYOTA',
            'cartype' => 'SEDAN',
            'model' => '1.8Q',
            'year' => '2024',
            'price' => '725000000',
            'description' => 'Toyota Corolla Altis - Mẫu sedan đáng tin cậy và hiện đại của Toyota. Với hiệu suất mạnh mẽ, thiết kế đẳng cấp và tính năng tiện ích, Altis thu hút người dùng bởi sự linh hoạt và tiết kiệm.            ',
            'image' => '../images/corolla_altis.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'FORTUNER',
            'brand' => 'TOYOTA',
            'cartype' => 'SUV',
            'model' => '2.4AT 4X2',
            'year' => '2024',
            'price' => ' 1055000000 ',
            'description' => 'Toyota Fortuner - Mẫu SUV phổ biến của Toyota. Sức mạnh động cơ, khả năng vận hành off-road, và thiết kế mạnh mẽ là những điểm nổi bật. Nội thất tiện nghi và hệ thống an toàn cao cấp làm cho Fortuner trở thành lựa chọn ưa thích trong phân khúc SUV.            ',
            'image' => '../images/fortuner.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'HILUX',
            'brand' => 'TOYOTA',
            'cartype' => 'PICK-UP TRUCK',
            'model' => '2.4L 4X2 AT',
            'year' => '2024',
            'price' => '825000000',
            'description' => 'Toyota Hilux - Mẫu xe bán tải phổ biến và đáng tin cậy của Toyota. Sức mạnh động cơ, khả năng chịu tải cao và khả năng vận hành off-road vượt trội là điểm mạnh của Hilux. Thiết kế bền bỉ, nội thất tiện nghi và tính năng an toàn làm cho Hilux trở thành sự lựa chọn ưa thích cho những công việc đòi hỏi sức mạnh và đáng tin cậy.            ',
            'image' => '../images/hilux.png',
            'seats' => '5',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'ALPHARD',
            'brand' => 'TOYOTA',
            'cartype' => 'MPV',
            'model' => 'LUXURY',
            'year' => '2024',
            'price' => '4370000000',
            'description' => 'Toyota Alphard - Một mẫu xe MPV cao cấp và sang trọng của Toyota. Alphard nổi bật với thiết kế đẳng cấp, nội thất rộng rãi và tiện nghi, cùng với các tính năng an toàn và giải trí hiện đại. Sức mạnh động cơ và khả năng vận hành êm ái làm cho Alphard trở thành sự lựa chọn ưa thích cho những gia đình lớn và những chuyến đi dài hành trình.            ',
            'image' => '../images/alphard_luxury.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'INNOVA CROSS',
            'brand' => 'TOYOTA',
            'cartype' => 'MPV',
            'model' => 'HEV',
            'year' => '2024',
            'price' => '998000000',
            'description' => ' Toyota Innova Cross - Một phiên bản độc đáo của mẫu MPV Innova của Toyota. Innova Cross được thiết kế với phong cách mạnh mẽ và thể thao hơn, kèm theo tính linh hoạt và tiện ích của dòng xe MPV. Với nội thất rộng rãi, sức mạnh động cơ, và tính năng an toàn hiện đại, Innova Cross là sự lựa chọn lý tưởng cho những gia đình hoạt động năng động và muốn sở hữu một chiếc xe đa dụng đầy phong cách.            ',
            'image' => '../images/innova_cross.png',
            'seats' => '8',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'INNOVA',
            'brand' => 'TOYOTA',
            'cartype' => 'MPV',
            'model' => '2.0E',
            'year' => '2024',
            'price' => '755000000',
            'description' => 'Toyota Innova - Mẫu xe MPV 7 chỗ đáng tin cậy và phổ biến của Toyota. Innova nổi bật với thiết kế linh hoạt, nội thất rộng rãi, và khả năng vận hành ổn định. Sức mạnh động cơ, tiện nghi nội thất, và tính an toàn cao làm cho Innova trở thành lựa chọn phổ biến cho gia đình và doanh nghiệp.            ',
            'image' => '../images/innova.png',
            'seats' => '8',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'LAND CRUISER PRADO',
            'brand' => 'TOYOTA',
            'cartype' => 'SUV',
            'model' => 'Prado',
            'year' => '2024',
            'price' => '2628000000',
            'description' => 'Toyota Land Cruiser Prado - Một mẫu SUV hạng sang và đa dụng của Toyota. Prado nổi bật với khả năng vận hành off-road mạnh mẽ, động cơ mạnh mẽ và nội thất sang trọng. Thiết kế bền bỉ, tính linh hoạt và tính năng an toàn cao làm cho Prado trở thành sự lựa chọn ưa thích cho những người muốn sự đa dụng và sang trọng trong một chiếc SUV.            ',
            'image' => '../images/land_cruiser_prado.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'LAND CRUISER',
            'brand' => 'TOYOTA',
            'cartype' => 'SUV',
            'model' => 'LC300',
            'year' => '2024',
            'price' => '4286000000',
            'description' => 'Toyota Land Cruiser - Một biểu tượng trong phân khúc SUV hạng sang, nổi tiếng với sức mạnh, độ bền và khả năng vận hành off-road. Land Cruiser kết hợp giữa hiệu suất mạnh mẽ, nội thất tiện nghi và tính an toàn cao, tạo ra một trải nghiệm lái xe đỉnh cao cho cả trong thành phố và trên mọi địa hình.            ',
            'image' => '../images/land_cruiser.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'HYUNDAI GRAND i10',
            'brand' => 'HYUNDAI',
            'cartype' => 'HATCHBACK',
            'model' => '1.2 AT',
            'year' => '2024',
            'price' => '455000000',
            'description' => 'Hyundai Grand i10 - Một mẫu xe hatchback nhỏ gọn và tiện ích của Hyundai. Grand i10 nổi bật với thiết kế thân thiện và tiết kiệm nhiên liệu, cùng với nội thất rộng rãi và tính linh hoạt. Sức mạnh động cơ, tính năng an toàn và giá cả phải chăng làm cho Grand i10 trở thành lựa chọn phổ biến cho người dùng đô thị.            ',
            'image' => '../images/hyundai-i10-sedan.png',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'ACCENT',
            'brand' => 'HYUNDAI',
            'cartype' => 'SEDAN',
            'model' => '1.4 MT',
            'year' => '2024',
            'price' => '472000000',
            'description' => 'Hyundai Accent - Một mẫu sedan nhỏ gọn và tiết kiệm nhiên liệu của Hyundai. Accent nổi bật với thiết kế hiện đại, sức mạnh động cơ, và tính tiện ích cao. Nội thất thoải mái và tính an toàn cao làm cho Accent trở thành lựa chọn phổ biến trong phân khúc sedan nhỏ.            ',
            'image' => '../images/accent.png',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'TUCSON',
            'brand' => 'HYUNDAI',
            'cartype' => 'CUV',
            'model' => '2.0 Oil',
            'year' => '2024',
            'price' => '959000000',
            'description' => 'Hyundai Tucson - Một mẫu SUV đa dụng và phổ biến của Hyundai. Tucson nổi bật với thiết kế hiện đại, khả năng vận hành ổn định và tiện nghi nội thất. Sức mạnh động cơ, tính linh hoạt và tính an toàn cao làm cho Tucson trở thành lựa chọn phổ biến trong phân khúc SUV.            ',
            'image' => '../images/tucson.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'SANTAFE',
            'brand' => 'HYUNDAI',
            'cartype' => 'CUV',
            'model' => '2.2 Oil',
            'year' => '2024',
            'price' => '1269000000',
            'description' => 'Hyundai Santa Fe - Một mẫu SUV hạng sang và đa dụng của Hyundai. Santa Fe nổi bật với thiết kế đẳng cấp, nội thất rộng rãi và tiện nghi, cùng với khả năng vận hành ổn định và an toàn cao. Sức mạnh động cơ, tính linh hoạt và tính tiện ích làm cho Santa Fe trở thành lựa chọn hàng đầu cho những gia đình hoạt động năng động và muốn sở hữu một chiếc SUV sang trọng và đa dụng.            ',
            'image' => '../images/santafe.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'ELANTRA',
            'brand' => 'HYUNDAI',
            'cartype' => 'SEDAN',
            'model' => '2.0 AT',
            'year' => '2024',
            'price' => '729000000',
            'description' => 'Hyundai Elantra - Một mẫu sedan phổ biến và đa dụng của Hyundai. Elantra nổi bật với thiết kế hiện đại, sức mạnh động cơ, và tính năng tiện ích. Nội thất thoải mái và tính an toàn cao làm cho Elantra trở thành lựa chọn ưa thích trong phân khúc sedan.            ',
            'image' => '../images/elantra.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'PALISADE',
            'brand' => 'HYUNDAI',
            'cartype' => 'SUV',
            'model' => 'Palisade Prestige 7 seats',
            'year' => '2024',
            'price' => '1559000000',
            'description' => 'Hyundai Palisade - Một mẫu SUV hạng sang và đa dụng của Hyundai. Palisade nổi bật với thiết kế sang trọng, nội thất rộng rãi và tiện nghi, cùng với khả năng vận hành ổn định và an toàn cao. Sức mạnh động cơ, tính linh hoạt và tính tiện ích làm cho Palisade trở thành lựa chọn hàng đầu trong phân khúc SUV hạng sang.            ',
            'image' => '../images/palisade.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
        DB::table('cars')->insert([
            'name' => 'CUSTIN',
            'brand' => 'HYUNDAI',
            'cartype' => 'MPV',
            'model' => 'Custin 2.0T-GDi',
            'year' => '2024',
            'price' => '999000000',
            'description' => 'Hyundai Custin - Mẫu MPV cỡ trung đầu tiên của Hyundai. Custin trang bị các hệ thống an toàn và 4 chế độ lái cùng với nội, ngoại thất đi theo hướng hiện đại, 2 thiết kế ghế độc lập, kiểu thương gia. Động cơ mạnh mẽ cùng độ tiện ích cao làm cho Custin trở thành lựa chọn hàng đầu trong phân khúc MPV tiện nghi',
            'image' => '../images/custin.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
        DB::table('cars')->insert([
            'name' => 'STARGAZER',
            'brand' => 'HYUNDAI',
            'cartype' => 'MPV',
            'model' => '1.5 AT',
            'year' => '2024',
            'price' => '685000000',
            'description' => 'Hyundai Stargazer - Mẫu xe MPV hơi hướng SUV đáng tin cậy và đầy tính năng tiện ích. Stargazer nổi bật với thiết kế linh hoạt, nội thất rộng rãi, và khả năng vận hành ổn định. Sức mạnh động cơ, tiện nghi nội thất, và tính an toàn cao làm cho Stargazer trở thành lựa chọn phổ biến cho gia đình và doanh nghiệp.            ',
            'image' => '../images/stargazer.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
        DB::table('cars')->insert([
            'name' => 'XPANDER',
            'brand' => 'MITSUBISHI',
            'cartype' => 'SUV',
            'model' => 'AT PREMINUM',
            'year' => '2024',
            'price' => '658000000',
            'description' => 'Mitsubishi Xpander - Một mẫu xe MPV đa dụng và phổ biến của Mitsubishi. Xpander nổi bật với thiết kế hiện đại, nội thất rộng rãi và tiện nghi, cùng với sức mạnh động cơ và tính an toàn cao. Với khả năng chở hàng linh hoạt và tiện ích, Xpander là lựa chọn ưa thích cho gia đình và doanh nghiệp.            ',
            'image' => '../images/xpander.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'PAJERO SPORT',
            'brand' => 'MITSUBISHI',
            'cartype' => 'SUV',
            'model' => 'DIESEL 4X4 AT',
            'year' => '2024',
            'price' => '1365000000',
            'description' => 'Mitsubishi Pajero Sport - Một mẫu SUV hạng sang và đa dụng của Mitsubishi. Pajero Sport nổi bật với thiết kế mạnh mẽ, khả năng vận hành off-road, và tiện nghi nội thất. Sức mạnh động cơ, tính linh hoạt và tính an toàn cao làm cho Pajero Sport trở thành lựa chọn hàng đầu trong phân khúc SUV.            ',
            'image' => '../images/pajerosport.jpg',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);  
        DB::table('cars')->insert([
            'name' => ' OUTLANDER',
            'brand' => 'MITSUBISHI',
            'cartype' => 'CUV',
            'model' => '2.0 CVT',
            'year' => '2024',
            'price' => '825000000',
            'description' => 'Mitsubishi Outlander - Một mẫu SUV đa dụng và phổ biến của Mitsubishi. Outlander nổi bật với thiết kế hiện đại, nội thất rộng rãi và tiện nghi, cùng với sức mạnh động cơ và tính an toàn cao. Với khả năng vận hành linh hoạt và tính tiện ích, Outlander là lựa chọn phổ biến cho gia đình và những chuyến đi xa.            ',
            'image' => '../images/outlander.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => ' TRITON',
            'brand' => 'MITSUBISHI',
            'cartype' => 'PICK-UP TRUCK',
            'model' => '4x4 AT ATHLETE',
            'year' => '2024',
            'price' => '905000000',
            'description' => 'Mitsubishi Triton - Một mẫu xe bán tải đa dụng và mạnh mẽ của Mitsubishi. Triton nổi bật với thiết kế đẳng cấp, khả năng chịu tải cao và khả năng vận hành off-road xuất sắc. Nội thất tiện nghi và tính an toàn cao làm cho Triton trở thành lựa chọn ưa thích trong phân khúc xe bán tải.            ',
            'image' => '../images/triton.jpg',
            'seats' => '5',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => ' ATTRAGE',
            'brand' => 'MITSUBISHI',
            'cartype' => 'SEDAN',
            'model' => 'MT',
            'year' => '2024',
            'price' => '380000000',
            'description' => 'Mitsubishi Attrage - Một mẫu sedan nhỏ gọn và tiết kiệm nhiên liệu của Mitsubishi. Attrage nổi bật với thiết kế linh hoạt, sức mạnh động cơ, và tiện nghi nội thất. Nội thất thoải mái và tính an toàn cao làm cho Attrage trở thành lựa chọn phổ biến trong phân khúc sedan nhỏ.            ',
            'image' => '../images/attrage.jpeg',
            'seats' => '4',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => ' XFORCE',
            'brand' => 'MITSUBISHI',
            'cartype' => 'SUV',
            'model' => 'EXCEED',
            'year' => '2024',
            'price' => '640000000',
            'description' => 'Xforce - Mẫu SUV đô thị cỡ B của Mitsubishi với 4 phiên bản, bản Ultimate là cao cấp nhất. Xe nổi bật với kích thước lớn, thiết kế cơ bắp và tính linh hoạt trên mọi địa hình. Động cơ MIVEC 1.5L, công suất 105 mã lực. Xe trang bị nhiều tính năng tiện ích và an toàn như hệ thống AYC, MMSS, và âm thanh cao cấp Yamaha. Nội thất sang trọng và tiện nghi, đáp ứng nhu cầu của người dùng hiện đại.            ',
            'image' => '../images/xforce.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'ALMERA',
            'brand' => 'NISSAN',
            'cartype' => 'SEDAN',
            'model' => 'CVT',
            'year' => '2024',
            'price' => '539000000',
            'description' => 'Almera là một mẫu sedan nhỏ gọn của Nissan, nổi tiếng với tính tiết kiệm nhiên liệu và giá cả phải chăng. Xe được thiết kế để đáp ứng nhu cầu hàng ngày của các gia đình và người dùng đô thị. Almera cung cấp nội thất rộng rãi, hiệu suất động cơ ổn định và tính an toàn cao. Đây là một lựa chọn phổ biến trong phân khúc sedan nhỏ.            ',
            'image' => '../images/almera.jpg',
            'seats' => '4',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'KICKS',
            'brand' => 'NISSAN',
            'cartype' => 'CUV',
            'model' => 'E-POWER',
            'year' => '2024',
            'price' => '789000000',
            'description' => 'Nissan Kicks là một mẫu SUV nhỏ gọn và đô thị của Nissan, với thiết kế hiện đại và động cơ tiết kiệm nhiên liệu. Xe nổi bật với không gian nội thất rộng rãi và tính linh hoạt, cùng với các tính năng an toàn và giải trí tiện ích. Kicks là sự lựa chọn phổ biến cho những người dùng đô thị muốn sự tiện lợi và phong cách.            ',
            'image' => '../images/kicks.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);

        DB::table('cars')->insert([
            'name' => 'NAVARA',
            'brand' => 'NISSAN',
            'cartype' => 'PICK-UP TRUCK',
            'model' => 'CVT',
            'year' => '2024',
            'price' => '699000000',
            'description' => 'Nissan Navara là một mẫu xe bán tải đa dụng và mạnh mẽ, với khả năng chịu tải cao và khả năng vận hành off-road ấn tượng. Navara nổi bật với thiết kế cứng cáp, nội thất tiện nghi, và sức mạnh động cơ. Đây là sự lựa chọn phổ biến trong phân khúc bán tải cho cả công việc và sử dụng cá nhân.            ',
            'image' => '../images/navara.jpg',
            'seats' => '5',
            'fuel' => 'Oil'
        ]);                                                                  
        DB::table('cars')->insert([
            'name' => 'MORNING',
            'brand' => 'KIA',
            'cartype' => 'HATCHBACK',
            'model' => 'PREMINUM HATCHBACK',
            'year' => '2024',
            'price' => '349000000',
            'description' => 'Kia Morning - Một mẫu hatchback nhỏ gọn và tiết kiệm nhiên liệu của Kia. Morning nổi bật với thiết kế linh hoạt, sức mạnh động cơ và tính tiện ích cao. Nội thất thoải mái và tính an toàn cao làm cho Morning trở thành lựa chọn phổ biến trong phân khúc hatchback nhỏ.            ',
            'image' => '../images/morning.jpg',
            'seats' => '4',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'SOLUTO',
            'brand' => 'KIA',
            'cartype' => 'SEDAN',
            'model' => 'AT DELUXE',
            'year' => '2024',
            'price' => '386000000',
            'description' => 'Kia Soluto - Một mẫu sedan nhỏ gọn và tiết kiệm nhiên liệu của Kia. Soluto nổi bật với thiết kế hiện đại, tính tiện nghi và sức mạnh động cơ. Nội thất rộng rãi và tính an toàn cao làm cho Soluto trở thành lựa chọn phổ biến trong phân khúc sedan nhỏ.            ',
            'image' => '../images/soluto.jpg',
            'seats' => '4',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'K3',
            'brand' => 'KIA',
            'cartype' => 'SEDAN',
            'model' => 'TURBO GT',
            'year' => '2024',
            'price' => '549000000',
            'description' => 'Kia K3 - Một mẫu sedan hạng trung phổ biến của Kia. K3 nổi bật với thiết kế hiện đại, nội thất sang trọng và tiện nghi, cùng với hiệu suất động cơ mạnh mẽ. Tính an toàn cao và các tính năng công nghệ làm cho K3 trở thành lựa chọn ưa thích trong phân khúc sedan hạng trung.            ',
            'image' => '../images/k3.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'K5',
            'brand' => 'KIA',
            'cartype' => 'SEDAN',
            'model' => '2.5 GT-LINE',
            'year' => '2024',
            'price' => '859000000',
            'description' => 'Kia K5 - Một mẫu sedan hạng trung cao cấp của Kia. K5 nổi bật với thiết kế đẳng cấp, nội thất sang trọng và tiện nghi, cùng với hiệu suất động cơ mạnh mẽ. Tính an toàn cao và các tính năng công nghệ tiên tiến làm cho K5 trở thành lựa chọn hàng đầu trong phân khúc sedan hạng trung.            ',
            'image' => '../images/k5.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);     

        DB::table('cars')->insert([
            'name' => 'SONET',
            'brand' => 'KIA',
            'cartype' => 'SUV',
            'model' => '1.5 LUXURY',
            'year' => '2024',
            'price' => '519000000',
            'description' => '.',
            'image' => '../images/sonet.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);       
        DB::table('cars')->insert([
            'name' => 'SELTOS',
            'brand' => 'KIA',
            'cartype' => 'CUV',
            'model' => '1.4 LUXURY',
            'year' => '2024',
            'price' => '599000000',
            'description' => 'Kia Sonet - Một mẫu SUV nhỏ gọn và đa dụng của Kia. Sonet nổi bật với thiết kế hiện đại, tính linh hoạt và tính tiện ích cao. Sức mạnh động cơ và tính an toàn làm cho Sonet trở thành lựa chọn phổ biến cho những người muốn sở hữu một chiếc SUV tiện dụng trong đô thị.            ',
            'image' => '../images/seltos.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);       
        DB::table('cars')->insert([
            'name' => 'SPORTAGE',
            'brand' => 'KIA',
            'cartype' => 'CUV',
            'model' => '2.0 LUXURY',
            'year' => '2024',
            'price' => '799000000',
            'description' => 'Kia Sportage - Một mẫu SUV phổ biến và đa dụng của Kia. Sportage nổi bật với thiết kế hiện đại, nội thất rộng rãi và tiện nghi, cùng với hiệu suất động cơ mạnh mẽ. Tính an toàn cao và các tính năng công nghệ tiên tiến làm cho Sportage trở thành lựa chọn ưa thích trong phân khúc SUV.            ',
            'image' => '../images/sportage.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);    
        DB::table('cars')->insert([
            'name' => 'SORENTO',
            'brand' => 'KIA',
            'cartype' => 'SUV',
            'model' => '2.2D LUXURY',
            'year' => '2024',
            'price' => '979000000',
            'description' => 'Kia Sorento - Một mẫu SUV hạng sang và đa dụng của Kia. Sorento nổi bật với thiết kế đẳng cấp, nội thất sang trọng và tiện nghi, cùng với hiệu suất động cơ mạnh mẽ. Tính an toàn cao và các tính năng công nghệ tiên tiến làm cho Sorento trở thành lựa chọn hàng đầu trong phân khúc SUV.            ',
            'image' => '../images/sorento.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'CARNIVAL',
            'brand' => 'KIA',
            'cartype' => 'MPV',
            'model' => '2.2D LUXURY',
            'year' => '2024',
            'price' => '1169000000',
            'description' => 'Kia Carnival - Một mẫu MPV hạng sang và đa dụng của Kia. Carnival nổi bật với thiết kế rộng rãi và sang trọng, nội thất tiện nghi và tính linh hoạt. Sức mạnh động cơ và các tính năng an toàn làm cho Carnival trở thành lựa chọn ưa thích cho gia đình và các chuyến đi dài.            ',
            'image' => '../images/carnival.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'CARENS',
            'brand' => 'KIA',
            'cartype' => 'SUV',
            'model' => '1.5 MT DELUXE',
            'year' => '2024',
            'price' => '589000000',
            'description' => 'Kia Carens - Một mẫu MPV đa dụng và tiện nghi của Kia. Carens nổi bật với thiết kế linh hoạt, nội thất rộng rãi và tiện ích, cùng với sức mạnh động cơ và tính an toàn cao. Đây là sự lựa chọn phổ biến cho gia đình và các chuyến đi dài.            ',
            'image' => '../images/carens.jpg',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);                                                                                                                                                             
    }
}