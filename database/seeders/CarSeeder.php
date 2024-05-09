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
            'name' => 'COROLLA ALTIS ',
            'brand' => 'TOYOTA',
            'model' => '1.8Q',
            'year' => '2024',
            'price' => '725000000',
            'description' => 'Corolla Altis là một dòng xe sedan hạng trung của hãng Toyota. Xe được thiết kế với vẻ ngoài sang trọng và hiện đại, kết hợp giữa đường nét mượt mà và chi tiết tinh tế. Corolla Altis được trang bị nhiều tính năng tiên tiến như hệ thống giải trí đa phương tiện, hệ thống điều hòa không khí tự động và các tính năng an toàn như hệ thống phanh ABS và túi khí. Xe có sự lựa chọn động cơ xăng từ 1.6L đến 2.0L, đáp ứng nhu cầu vận hành và tiết kiệm nhiên liệu. Với độ bền, đẳng cấp và sự phổ biến trên toàn cầu, Corolla Altis là một lựa chọn ưu việt cho những người tìm kiếm một chiếc sedan đáng tin cậy và tiện nghi.',
            'image' => '../images/corolla_altis.png',
            'seats' => '5',
            'fuel' => 'Gasonline'
        ]);
        DB::table('cars')->insert([
            'name' => 'FORTUNER',
            'brand' => 'TOYOTA',
            'model' => '2.4AT 4X2',
            'year' => '2024',
            'price' => ' 1055000000 ',
            'description' => 'Fortuner là một dòng xe SUV hạng trung của Toyota, với thiết kế mạnh mẽ và khả năng vận hành off-road ấn tượng. Xe được trang bị động cơ mạnh, hệ dẫn động 4 bánh và hệ thống treo linh hoạt, giúp vượt qua địa hình khó khăn một cách dễ dàng. Nội thất rộng rãi và tiện nghi của Fortuner mang đến sự thoải mái cho hành khách. Với tính năng an toàn như hệ thống phanh ABS, túi khí đa điểm và hỗ trợ khởi hành ngang dốc, Fortuner đảm bảo sự an tâm khi di chuyển. Với sự kết hợp hoàn hảo giữa khả năng off-road và tiện nghi, Fortuner là lựa chọn phổ biến trong phân khúc SUV, phục vụ nhu cầu khám phá và cuộc sống đa dụng của người lái.',
            'image' => '../images/fortuner.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'HILUX',
            'brand' => 'TOYOTA',
            'model' => '2.4L 4X2 AT',
            'year' => '2024',
            'price' => '825000000',
            'description' => 'Hilux là một dòng xe bán tải hạng trung của Toyota, nổi tiếng với độ bền và khả năng vận hành mạnh mẽ. Xe được thiết kế để đối phó với mọi điều kiện địa hình và tải trọng, với khung gầm chắc chắn và hệ thống treo linh hoạt. Hilux được trang bị động cơ mạnh mẽ và hệ dẫn động 4 bánh, mang lại khả năng vượt qua các điều kiện địa hình khó khăn. Ngoài ra, nội thất của Hilux cũng được thiết kế tiện nghi và chất lượng, đáp ứng nhu cầu của người sử dụng. Với sự kết hợp giữa độ bền, khả năng vận hành và tiện nghi, Hilux là một lựa chọn phổ biến trong phân khúc xe bán tải, phục vụ nhu cầu công việc và phiêu lưu của người lái.',
            'image' => '../images/hilux.png',
            'seats' => '5',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'ALPHARD',
            'brand' => 'TOYOTA',
            'model' => 'LUXURY',
            'year' => '2024',
            'price' => '4370000000',
            'description' => 'Alphard Luxury là một phiên bản cao cấp của mẫu xe MPV Alphard của Toyota, mang đến trải nghiệm vượt trội về cảm giác lái và tiện nghi. Xe được thiết kế với ngoại hình sang trọng và đẳng cấp, với các chi tiết nội thất và ngoại thất được tinh chỉnh để tạo ra không gian xa hoa và thoải mái. Alphard Luxury đi kèm với các tính năng tiện ích cao cấp như ghế da cao cấp, hệ thống âm thanh vòm, hệ thống điều hòa tự động đa vùng và hệ thống giải trí hàng ghế sau. Ngoài ra, Alphard Luxury cũng được trang bị các tính năng an toàn như hệ thống cảnh báo va chạm, hệ thống hỗ trợ khởi hành ngang dốc và hệ thống kiểm soát hành trình. Với sự kết hợp giữa sang trọng, tiện nghi và hiệu suất vận hành, Alphard Luxury là một lựa chọn tuyệt vời cho những ai đang tìm kiếm một chiếc xe MPV cao cấp và đẳng cấp.',
            'image' => '../images/alphard_luxury.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'INNOVA CROSS',
            'brand' => 'TOYOTA',
            'model' => 'HEV',
            'year' => '2024',
            'price' => '998000000',
            'description' => 'Innova Cross là một phiên bản đặc biệt của mẫu xe MPV (Multi-Purpose Vehicle) Innova của Toyota, với thiết kế mang tính chất mạnh mẽ và thể thao. Xe được trang bị các chi tiết ngoại thất độc đáo như lưới tản nhiệt mạ crom đen, cản trước và sau thể thao, và các chi tiết mạnh mẽ khác. Nội thất của Innova Cross được cải tiến với các vật liệu cao cấp và các tính năng tiện nghi như hệ thống giải trí và hệ thống điều hòa tự động. Innova Cross vẫn giữ nguyên khả năng chở hàng và chỗ ngồi linh hoạt của Innova, đồng thời mang đến một diện mạo thể thao và cá tính hơn. Với sự kết hợp giữa tính linh hoạt của một MPV và phong cách mạnh mẽ của một xe thể thao đa dụng, Innova Cross là một sự lựa chọn hấp dẫn cho những người yêu thích sự đa năng và nổi bật trên đường.',
            'image' => '../images/innova_cross.png',
            'seats' => '8',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'INNOVA',
            'brand' => 'TOYOTA',
            'model' => '2.0E',
            'year' => '2024',
            'price' => '755000000',
            'description' => 'Innova là một mẫu xe MPV (Multi-Purpose Vehicle) của Toyota, được thiết kế để đáp ứng nhu cầu vận chuyển hành khách và đa dụng. Xe có thiết kế rộng rãi với khả năng chở được nhiều người và hàng hóa. Innova được đánh giá cao về độ bền, độ tin cậy và khả năng vận hành trong suốt thời gian hoạt động. Nội thất của Innova được thiết kế để mang lại sự thoải mái và tiện nghi cho hành khách, với các tính năng như hệ thống giải trí, hệ thống điều hòa không khí và không gian rộng rãi. Innova cũng được trang bị các tính năng an toàn như hệ thống phanh ABS, túi khí và hỗ trợ khởi hành ngang dốc. Với sự kết hợp giữa tính linh hoạt và tiện ích, Innova là một lựa chọn phổ biến cho gia đình và doanh nghiệp cần một chiếc xe đa dụng và đáng tin cậy.',
            'image' => '../images/innova.png',
            'seats' => '8',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'LAND CRUISER PRADO',
            'brand' => 'TOYOTA',
            'model' => 'Prado',
            'year' => '2024',
            'price' => '2628000000',
            'description' => 'Land Cruiser Prado là một dòng xe SUV hạng trung của Toyota, nổi tiếng với khả năng vận hành off-road và tiện nghi cao. Xe được thiết kế mạnh mẽ và bền bỉ, với khung gầm chắc chắn và hệ thống treo linh hoạt. Land Cruiser Prado được trang bị động cơ mạnh mẽ, hệ dẫn động 4 bánh và hệ thống điều khiển địa hình, giúp vượt qua mọi địa hình khó khăn một cách dễ dàng. Nội thất của Prado được thiết kế sang trọng và tiện nghi, với các tính năng như hệ thống giải trí, hệ thống điều hòa không khí và khoang chứa rộng rãi. Prado cũng được trang bị các tính năng an toàn như hệ thống phanh ABS, túi khí đa điểm và hỗ trợ khởi hành ngang dốc. Với sự kết hợp giữa khả năng off-road mạnh mẽ và sự tiện nghi của một xe SUV, Land Cruiser Prado là lựa chọn ưu việt cho những người yêu thích cuộc sống phiêu lưu và đa dụng.',
            'image' => '../images/land_cruiser_prado.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'LAND CRUISER',
            'brand' => 'TOYOTA',
            'model' => 'LC300',
            'year' => '2024',
            'price' => '4286000000',
            'description' => 'Land Cruiser là một dòng xe SUV hạng sang của Toyota, với lịch sử lâu đời và danh tiếng vững chắc. Xe được biết đến với khả năng vận hành mạnh mẽ và độ bền cao, phù hợp cho cả điều kiện địa hình khắc nghiệt và sử dụng hàng ngày. Land Cruiser có thiết kế sang trọng và mạnh mẽ, với nội thất rộng rãi và tiện nghi cao cấp. Xe cung cấp các tính năng và công nghệ hiện đại như hệ thống giải trí, hệ thống điều hòa không khí đa vùng và hệ thống an toàn tiên tiến. Land Cruiser cũng nổi tiếng với khả năng vượt qua các điều kiện địa hình khó khăn nhờ hệ dẫn động 4 bánh và hệ thống điều khiển địa hình thông minh. Với sự kết hợp giữa sự sang trọng, sức mạnh và khả năng vận hành off-road, Land Cruiser là một biểu tượng trong thế giới xe hơi.',
            'image' => '../images/land_cruiser.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'HYUNDAI GRAND i10',
            'brand' => 'HYUNDAI',
            'model' => '1.2 AT',
            'year' => '2024',
            'price' => '455000000',
            'description' => 'Với kích ngoại hình và giá bán hợp lý. Grand I10 Sedan là lựa chọn tốt cho khu vực đô thị với khả năng di chuyển linh hoạt, khả năng tiêu hao nhiên liệu thấp và đặc biệt là có thể mang vác khá nhiều hành lý khi di chuyển.',
            'image' => '../images/hyundai-i10-sedan.png',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'ACCENT',
            'brand' => 'HYUNDAI',
            'model' => '1.4 MT',
            'year' => '2024',
            'price' => '472000000',
            'description' => 'New Hyundai Accent được thiết kế tạo sự cân bằng hoàn hảo giữa thể thao và thanh lịch, cùng khả năng vận hành mạnh mẽ và dáng vẻ vô cùng cuốn hút.',
            'image' => '../images/accent.png',
            'seats' => '5',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'TUCSON',
            'brand' => 'HYUNDAI',
            'model' => '2.0 Oil',
            'year' => '2024',
            'price' => '959000000',
            'description' => '.',
            'image' => '../images/tucson.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'SANTAFE',
            'brand' => 'HYUNDAI',
            'model' => '2.2 Oil',
            'year' => '2024',
            'price' => '1269000000',
            'description' => '.',
            'image' => '../images/santafe.png',
            'seats' => '7',
            'fuel' => 'Oil'
        ]);
        DB::table('cars')->insert([
            'name' => 'ELANTRA',
            'brand' => 'HYUNDAI',
            'model' => '2.0 AT',
            'year' => '2024',
            'price' => '729000000',
            'description' => '.',
            'image' => '../images/elantra.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]);
        DB::table('cars')->insert([
            'name' => 'PALISADE',
            'brand' => 'HYUNDAI',
            'model' => 'Palisade Prestige 7 seats',
            'year' => '2024',
            'price' => '1559000000',
            'description' => '.',
            'image' => '../images/palisade.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
        DB::table('cars')->insert([
            'name' => 'CUSTIN',
            'brand' => 'HYUNDAI',
            'model' => 'Custin 2.0T-GDi',
            'year' => '2024',
            'price' => '999000000',
            'description' => '.',
            'image' => '../images/custin.jpg',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
        DB::table('cars')->insert([
            'name' => 'STARGAZER',
            'brand' => 'HYUNDAI',
            'model' => '1.5 AT',
            'year' => '2024',
            'price' => '685000000',
            'description' => '.',
            'image' => '../images/stargazer.png',
            'seats' => '7',
            'fuel' => 'Gasoline'
        ]); 
    }
}
