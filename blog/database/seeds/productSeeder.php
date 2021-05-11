<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Adidas
        DB::table('products')->insert([
            //Adidas - Áo sơ mi
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo Sơ Mi Nam Trắng Adidas GS120', 'image' => 'Áo-Sơ-Mi-Nam-Trắng-Adidas-bodz-1.jpg',
                'price' => 210000, 'topHot' => rand(0, 1),
                'detail' => 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính'
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo Sơ mi Adidas SM-224', 'image' => 'agFWIkQl.jpg',
                'price' => 200000, 'topHot' => rand(0, 1),
                'detail' => 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính '
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'ÁO SƠ MI NAM THỜI TRANG CAO CẤP ADIDAS', 'image' => '46b432b98161d3ec905b1710cf8a8e34.jpg',
                'price' => 130000, 'topHot' => rand(0, 1),
                'detail' => 'Áo Sơ Mi Nam Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính, phù hợp cho sinh viên'
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'ÁO SƠ MI TRẮNG ADIDAS ASM658', 'image' => 'ao-so-mi-trang-adidas-asm658-4839-slide-1.jpg',
                'price' => 185000, 'topHot' => rand(0, 1),
                'detail' => 'Phong cách Hàn Quốc ôm body, in logo Adidas với thiết kế thanh lịch, ba nút ngang ở cổ áo tạo sự trẻ trung và đậm chất nam tính. Chất liệu thông thoáng'
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo sơ mi adidas', 'image' => '22448570_1678034495602399_2960329806400078310_n.jpg',
                'price' => 260000, 'topHot' => rand(0, 1),
                'detail' => 'Vải kate lụa co giãn nhẹ, màu sắc có thể hơi khác do ánh sáng'
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo sơ mi adidas SB135', 'image' => '41575497_2048526202127012_1411856480063193088_n.jpg',
                'price' => 250000, 'topHot' => rand(0, 1),
                'detail' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng. '
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo sơ mi adidas SB140', 'image' => '41462116_2048526212127011_6155881302852632576_n.png',
                'price' => 250000, 'topHot' => rand(0, 1),
                'detail' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.'
            ],
            [
                'typeID' => 1, 'brandID' => 1, 'productName' => 'Áo sơ mi adidas SB139', 'image' => '41527296_2048526198793679_7924116083030622208_n.png',
                'price' => 250000, 'topHot' => rand(0, 1),
                'detail' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.'
            ],
            //Adidas - Áo phông (Áo thun)
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'WXE TEE AOP', 'image' => 'WxE_Tee_AOP_Nhieu_mau_H43944_21_model.jpg',
                'price' => 700000, 'topHot' => rand(0, 1),
                'detail' => 'No returns, no refunds Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp 
             pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm 
             trên mỗi đơn hàng.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'LINEAR LOGO TEE', 'image' => 'LINEAR_LOGO_TEE_Ngoc_lam_HB1818_21_model.jpg',
                'price' => 700000, 'topHot' => rand(0, 1),
                'detail' => 'Áo phong thiết kế thoáng mát, nhẹ nhàng'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'LINEAR REPEAT', 'image' => 'LINEAR_REPEAT_Mau_xanh_da_troi_GN7128_21_model.jpg',
                'price' => 700000, 'topHot' => rand(0, 1),
                'detail' => 'Áo phong xanh đậm thiết kế đơn giản, nhẹ nhàng'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN GRAPHIC SPRT', 'image' => 'Ao_thun_graphic_SPRT_trang_GN2428_21_model.jpg',
                'price' => 850000, 'topHot' => rand(0, 1),
                'detail' => 'Dấu ấn lịch sử của adidas trải dài biết bao lĩnh vực, bao thế hệ và vượt xa mọi kỳ vọng. Không giới hạn. 
             Hãy mang trọn tâm thế ấy khi diện chiếc áo thun này. Chính xác là hãy luôn mang trọn tâm thế ấy, 
             nhưng logo adidas hiện diện như lời nhắc nếu bạn cần. Nếu không, bạn sẽ đơn giản là tận hưởng cảm giác dễ chịu đến từ chất vải cotton 
             mềm mại. Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng 
             tới chấm dứt rác thải nhựa.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN GRAPHIC ICONS PRIMEBLUE FOR THE OCEANS', 'image' => 'Ao_Thun_Graphic_Icons_Primeblue_For_The_Oceans_DJen_GL3263_21_model.jpg',
                'price' => 480000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO THUN GRAPHIC LÀM TỪ CHẤT LIỆU TÁI CHẾ. Tái chế thật phong cách. Chiếc áo thun ngắn tay adidas này mang họa tiết 
             graphic "Reduce and Reuse" cỡ lớn trước ngực. Sắc màu táo bạo cho bạn vẻ ngoài đầy nổi bật. Sản phẩm này may bằng vải công nghệ 
             Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN 3 SỌC SPRT', 'image' => 'Ao_thun_3_Soc_SPRT_trang_GN2418_21_model.jpg',
                'price' => 850000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO THUN COTTON MỀM MẠI VỚI THIẾT KẾ TỐI GIẢN. Đơn điệu? Không hề. Nâng tầm outfit adidas của bạn với chiếc áo thun 
             SPRT này. Thêm phần phong cách với thiết kế viền 3 Sọc và logo Ba Lá thêu nổi. Vì nhàm chán không phải là tính cách của bạn. 
             Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng tới 
             chấm dứt rác thải nhựa.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN GRAPHIC RUN FOR THE OCEANS', 'image' => 'Ao_thun_graphic_Run_for_the_Oceans_Be_GJ6456_21_model.jpg',
                'price' => 550000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO THUN CHẠY BỘ VÌ TƯƠNG LAI ĐẠI DƯƠNG XANH. Bất kể trên hè phố, đường mòn hay sân vận động, bộ môn chạy bộ đều kết nối bạn với mặt đất. 
             Hãy chung tay cùng adidas quyết tâm bảo vệ Trái Đất. Là một bước tiến nhỏ góp phần chấm dứt rác thải nhựa, chiếc áo thun chạy bộ này làm từ chất liệu tái 
             chế. Áo giúp bạn luôn khô ráo nhờ công nghệ AEROREADY thấm hút ẩm. Sản phẩm này may bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có 
             sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN CHẠY BỘ HEAT.RDY', 'image' => 'Ao_Thun_Chay_Bo_HEAT.RDY_trai_cam_GM1544_21_model.jpg',
                'price' => 1100000, 'topHot' => rand(0, 1),
                'detail' => 'Đánh bay mồ hôi nhễ nhại và chấm dứt vấn nạn rác thải nhựa. Chiếc áo thun chạy bộ này làm từ chất liệu tái chế, là một phần cam kết của adidas 
            hướng tới chấm dứt rác thải nhựa. Chất vải công nghệ HEAT.RDY cho bạn cảm giác mềm mại, siêu nhẹ trên da. Và cả cảm giác tạo ra sự khác biệt. 
            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN FORUM ', 'image' => 'áo-thun-forum.jpg',
                'price' => 700000, 'topHot' => rand(0, 1),
                'detail' => 'ÁO THUN FORUM'
            ],
            [
                'typeID' => 2, 'brandID' => 1, 'productName' => 'ÁO THUN GRAPHIC PHỦ HỌA TIẾT', 'image' => 'Ao_Thun_Graphic_Phu_Hoa_Tiet_trang_GP0884_21_model.jpg',
                'price' => 1100000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO THUN CỔ TRÒN IN HỌA TIẾT RẰN RI. Đôi khi trang phục rằn ri giúp bạn nổi bật chứ không phải để ẩn mình. Với những nét cọ mạnh mẽ, 
            chiếc áo thun adidas này biến tấu họa tiết rằn ri theo hướng hội họa. Chất vải jersey cotton mềm mại chính là tấm toan vẽ. 
            Các sản phẩm cotton của chúng tôi hỗ trợ ngành trồng bông bền vững. Đây là một phần cam kết của chúng tôi hướng tới chấm dứt rác thải nhựa.'
            ],
            //Adidas - Áo khoác
            [
                'typeID' => 3, 'brandID' => 1, 'productName' => 'ÁO GIÓ R.Y.V.', 'image' => 'Ao_gio_R.Y.V._nau_GD9300_21_model.jpg',
                'price' => 2200000, 'topHot' => rand(0, 1),
                'detail' => 'ÁO KHOÁC SIÊU NHẸ GIÚP BẠN LÊN ĐỒ PHÚT CHÓT. Sải bước mạnh mẽ. Lan tỏa tuyên ngôn. Tự tin thể hiện cá tính. Khi có cả một ngày dài bận rộn phía trước,
             đừng quên mang theo chiếc áo gió adidas này để bạn luôn sành điệu và thoải mái.'
            ],
            [
                'typeID' => 3, 'brandID' => 1, 'productName' => 'ÁO GIÓ ADIDAS PT3 KARKAJ', 'image' => 'áo-gió-adidas-pt3-karkaj.jpg',
                'price' => 1900000, 'topHot' => rand(0, 1),
                'detail' => 'No description'
            ],
            [
                'typeID' => 3, 'brandID' => 1, 'productName' => 'ÁO KHOÁC GIÓ NGẮN TAY', 'image' => 'Ao_khoac_gio_ngan_tay_DJen_GM0084_21_model.jpg',
                'price' => 1700000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO GIÓ CHƠI GOLF CHE CHẮN CHO BẠN TRONG ĐIỀU KIỆN THỜI TIẾT THẤT THƯỜNG. Điều kiện thời tiết thay đổi đòi hỏi sự linh hoạt trong thi đấu.
             Chiếc áo gió chơi golf adidas này sẽ đồng hành cùng bạn khi thời tiết thất thường. Cổ đứng và khóa kéo lửng giúp bạn tùy chỉnh độ che chắn. Chất vải chắn
              gió giúp bảo vệ bạn khi trời trở gió. Chất liệu mềm mại, thoáng khí và co giãn bốn chiều cho khả năng vận động không giới hạn. Sản phẩm này may bằng vải 
              công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao'
            ],
            [
                'typeID' => 3, 'brandID' => 1, 'productName' => 'ÁO GIÓ ADICOLOR FTO', 'image' => 'Ao_Gio_Adicolor_FTO_DJo_GN3561_21_model.jpg',
                'price' => 2700000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO GIÓ ADIDAS ADICOLOR MANG HƠI HƯỚNG RETRO. Ghi điểm với phong cách 3 Sọc. Không ngừng nghỉ. Xuống phố đầy phong cách bất chấp mọi thời
             tiết với chiếc áo gió này. Thiết kế ba màu đậm chất hoài niệm mang đến cho bạn phong cách thể thao retro. Trời trở gió ư? Chuyện nhỏ.Mẫu áo gió này may
             bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'typeID' => 3, 'brandID' => 1, 'productName' => 'ÁO KHOÁC CHẠY BỘ HALF-ZIP PRIMEBLUE', 'image' => 'Ao_Khoac_Chay_Bo_Half-Zip_Primeblue_trang_GP6487_21_model.jpg',
                'price' => 1400000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC ÁO KHOÁC CHẠY BỘ ẤM ÁP CÓ TÚI. Đừng để trời lạnh làm bạn nhụt chí. Hãy ra đường chạy bộ với cảm giác ấm áp dễ chịu đến từ chiếc áo khoác chạy bộ adidas này. 
            Các chi tiết tinh tế như khóa kéo lửng và lỗ xỏ ngón cái giúp bạn điều chỉnh độ che chắn tùy ý. Túi khóa kéo trước ngực đựng điện thoại khi bạn mu ốn đếm bước chân. 
            Chiếc áo khoác này làm từ chất liệu tái chế thân thiện với Trái Đất, cũng chính là nơi chúng ta chạy bộ.Sản phẩm này may bằng vải công nghệ Primeblue, 
            chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            //Adidas - Dép
            [
                'typeID' => 4, 'brandID' => 1, 'productName' => 'SANDAL ADILETTE COMFORT', 'image' => 'Sandal_Adilette_Comfort_DJen_FZ1750.jpg',
                'price' => 800000, 'topHot' => rand(0, 1),
                'detail' => 'ĐÔI DÉP PHONG CÁCH GIÚP BẠN THOẢI MÁI MỖI NGÀY. Trước hết để bàn chân chìm vào thoải mái. Với thiết kế cổ điển, đôi dép adidas này chính là 
            thực thể cô đọng tính đa năng và cảm giác thoải mái. Thân dép có đường viền ôm chân giúp nâng đỡ êm ái cho bạn cả ngày dễ chịu. Thân dép quai ngang đầy 
            phong cách tự hào thương hiệu adidas.'
            ],
            [
                'typeID' => 4, 'brandID' => 1, 'productName' => 'DÉP ĐẾ BẦN ADILETTE', 'image' => 'Dep_DJe_Ban_adilette_trang_GZ1025.jpg',
                'price' => 1500000, 'topHot' => rand(0, 1),
                'detail' => 'ĐẮM MÌNH TRONG KHUNG CẢNH BIỂN XANH CÁT TRẮNG KHI MANG ĐÔI DÉP ADILETTE NÀY. Hòa mình vào xung quanh hoặc tự tạo nên khung cảnh. 
            Thật dễ dàng với họa tiết đại dương mơ màng trên phần quai bằng da mượt mà của đôi dép adidas adilette này. 
            Nếu vẫn chưa nghe thấy tiếng sóng biển thì bạn cũng sắp tới nơi rồi. Đôi dép này sẽ giúp bạn luôn thoải mái suốt dọc đường.'
            ],
            [
                'typeID' => 4, 'brandID' => 1, 'productName' => 'DÉP XỎ NGÓN EEZAY FLIP-FLOPS', 'image' => 'Dep_xo_ngon_Eezay_Flip-Flops_Hong_FY8112.jpg',
                'price' => 500000, 'topHot' => rand(0, 1),
                'detail' => 'ĐÔI XĂNG ĐAN DÀNH CHO VIỆC DẠO CHƠI TRÊN BIỂN VỚI LỚP ĐỆM SIÊU NHẸ. Một thiết kế kinh điển mang lại sự thoải mái hàng ngày. 
            Đôi dép xỏ ngón nhẹ này thật tiện để tháo và xỏ khi ở trên bãi biển. Được thiết kế với lớp đệm tăng cường, đôi giày mang lại cho người đi cảm giác nhẹ nhàng, 
            êm ái.'
            ],
            [
                'typeID' => 4, 'brandID' => 1, 'productName' => 'DÉP NHÀ TẮM ADILETTE', 'image' => 'Dep_nha_tam_Adilette_DJen_FZ1716.jpg',
                'price' => 480000, 'topHot' => rand(0, 1),
                'detail' => 'DÉP QUAI NGANG LÓT ĐỆM CHO BÉ CẢM GIÁC THOẢI MÁI SAU GIỜ BƠI. Nuông chiều đôi chân bé khi ra khỏi bể bơi với đôi dép trẻ em thoải mái này. Nhanh khô và mềm mại, 
            đôi dép này nâng niu bàn chân bé với lớp đệm siêu nhẹ. Biểu tượng adidas cỡ lớn táo bạo cho vẻ ngoài kinh điển.'
            ],
            [
                'typeID' => 4, 'brandID' => 1, 'productName' => 'DÉP ADILETTE COMFORT', 'image' => 'Dep_adilette_Comfort_DJen_FZ1701.jpg',
                'price' => 800000, 'topHot' => rand(0, 1),
                'detail' => 'ĐÔI DÉP THOẢI MÁI PHÙ HỢP CẢ TRONG VÀ NGOÀI PHÒNG GYM. Đôi dép adidas này đẹp đến mức bạn sẽ muốn đi suốt cả ngày chứ không chỉ trong phòng thay đồ. Dép cho cảm giác 
            siêu thoải mái nhờ lòng dép ôm chân và quai ngang mềm dẻo dễ chịu mà cố định bàn chân chắc chắn. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất 
            liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.'
            ],
            //Adidas - Giày
            [
                'typeID' => 5, 'brandID' => 1, 'productName' => 'Giày Sneaker Nam Adidas ZX 2K 4D FW2002 “Cloud White”', 'image' => 'zx-2k-4d-shoes-white-fw2002-01-standard.jpg',
                'price' => 6000000, 'topHot' => rand(0, 1),
                'detail' => 'Hàng nghìn vận động viên. Nhiều năm trời thu thập dữ liệu. adidas 4D chính là công nghệ cho tương lai. Đế giữa in kỹ thuật số không chỉ mang 
            vẻ ngoài tân tiến, từng mảng lưới làm bằng nhựa lỏng cho cảm giác độc đáo dưới chân. Phom giày được chế tác bằng ánh sáng và hoàn thiện bằng nhiệt. 
            Tất cả tạo nên một đôi giày chạy bộ với thiết kế riêng thúc đẩy bạn tiến lên phía trước. Phiên bản đường phố này có phom dáng tối ưu, bề mặt sần và màu sắc 
            neon vui mắt, gợi nhớ đến dòng giày ZX lần đầu ra mắt vào thập niên 80.'
            ],
            [
                'typeID' => 5, 'brandID' => 1, 'productName' => 'Giày Sneaker Nam Adidas Ultraboost 20 City Pack FX7815 “Osaka”', 'image' => 'ultraboost-20-city-pack-hype-djen-fx7815-01-standard.jpg',
                'price' => 5000000, 'topHot' => rand(0, 1),
                'detail' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày Adidas Ultraboost 20 FX7815 hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. 
            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải 
            mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi'
            ],
            [
                'typeID' => 5, 'brandID' => 1, 'productName' => 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FU9993 “5th Anniversary”', 'image' => 'ultraboost-dna-shoes-black-fu9993-01-standard.jpg',
                'price' => 5000000, 'topHot' => rand(0, 1),
                'detail' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. 
            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. 
            Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy 
            mãi mãi.'
            ],
            [
                'typeID' => 5, 'brandID' => 1, 'productName' => 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FW4898 “Grey Silver”', 'image' => 'ultraboost-dna-shoes-grey-fw4898-01-standard.jpg',
                'price' => 5000000, 'topHot' => rand(0, 1),
                'detail' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong trợ 
            lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn 
            hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.'
            ],
            [
                'typeID' => 5, 'brandID' => 1, 'productName' => 'Giày Sneaker Nam Adidas X9000L3 EH0047 ”Core Black”', 'image' => 'x9000l3-shoes-black-eh0047-01-standard.jpg',
                'price' => 5000000, 'topHot' => rand(0, 1),
                'detail' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong 
            trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. 
            Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.'
            ],
            //Adidas -Quần dài
            [
                'typeID' => 6, 'brandID' => 1, 'productName' => 'QUẦN THỂ THAO VẢI DỆT LOGO BA LÁ LỚN TRỪU TƯỢNG', 'image' => 'Quan_the_thao_vai_det_logo_Ba_La_lon_truu_tuong_DJen_GE0831_21_model.jpg',
                'price' => 1800000, 'topHot' => rand(0, 1),
                'detail' => 'QUẦN THỂ THAO VỚI LOGO BA LÁ TRONG DIỆN MẠO MỚI. Bạn những tưởng logo Ba Lá chỉ có kích thước nhỏ? Không hẳn. Chiếc quần thể thao adidas này tự hào khoe logo trứ danh 
            đầy nổi bật. Để bạn luôn tự tin, táo bạo và sẵn sàng xuống phố'
            ],
            [
                'typeID' => 6, 'brandID' => 1, 'productName' => 'QUẦN THỂ THAO 3 SỌC BA LÁ 3D', 'image' => 'Quan_the_thao_3_Soc_Ba_La_3D_Mau_vang_GE0845_21_model.jpg',
                'price' => 1800000, 'topHot' => rand(0, 1),
                'detail' => 'QUẦN THỂ THAO MẶC HÀNG NGÀY TÔN VINH BIỂU TƯỢNG 3 SỌC. Bạn đang lên đồ? Đừng căng thẳng. 
            Khỏi cần đau đầu khi đã có chiếc quần thể thao adidas này. 
            Ban đầu vốn được thiết kế cho cảm giác thoải mái bên ngoài sân đấu, 
            trang phục này đã lấn sân mạnh mẽ kể từ thập niên 70. Trên sân khấu. Trong đám đông. 
            Trên đường phố. Chắc chắn bạn sẽ bắt gặp hình bóng của phong cách đầy biểu tượng này mỗi ngày. 
            Nhưng bạn vẫn có thể tạo nên chất riêng của mình. Vì bất kể bạn mặc gì, đó chính là cá tính của bạn.'
            ],
            [
                'typeID' => 6, 'brandID' => 1, 'productName' => 'TRACK PANTS VẢI DỆT SPRT SUPERSPORT', 'image' => 'Track_Pants_Vai_Det_SPRT_SuperSport_DJen_GN2462_21_model.jpg',
                'price' => 2200000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC QUẦN TRACK PANTS TÔN VINH DI SẢN THỂ THAO CÙNG NÉT BIẾN TẤU MỚI MẺ. Thì ra bạn hoàn toàn có thể mặc theo mọi phong cách. 
            Ít nhất là với chiếc quần track pants adidas này. Quần vừa thoải mái như đồ mặc nhà lại vừa chất chơi khi diện ra đường. Chẳng cần thay đồ khi hội bạn nổi 
            hứng hẹn nhau đi chơi. Bởi bạn vốn đã sẵn sàng cho ngày mới năng động. Hoặc lười biếng. Sản phẩm này có sử dụng chất liệu tái chế, là một phần cam kết của 
            chúng tôi hướng tới chấm dứt rác thải nhựa.'
            ],
            [
                'typeID' => 6, 'brandID' => 1, 'productName' => 'QUẦN NỈ R.Y.V.', 'image' => 'Quan_ni_R.Y.V._Xam_FM2239_21_model.jpg',
                'price' => 1800000, 'topHot' => rand(0, 1),
                'detail' => 'QUẦN ADIDAS MANG PHONG CÁCH THỜI TRANG ĐƯỜNG PHỐ ĐẬM CHẤT THƯƠNG HIỆU. Mỗi chi tiết, thói quen hay tính cách đều làm nên con người bạn. 
            Bạn có thể chọn phong cách tinh tế hoặc táo bạo. Nhưng đó vẫn luôn là bạn. Cơ hội mới để bộc lộ bản thân. Tinh thần chính của bộ sưu tập adidas Reveal 
            Your Voice là tiên phong mở đường và kiến tạo xu hướng của riêng bạn. Chiếc quần nỉ R.Y.V. này khoe những mảng nylon màu sắc táo bạo cho vẻ ngoài thu hút mọi 
            ánh nhìn.'
            ],
            [
                'typeID' => 6, 'brandID' => 1, 'productName' => 'TRACK PANTS TRICOLOR ADICOLOR', 'image' => 'Track_pants_Tricolor_Adicolor_Bac_GN4213_21_model.jpg',
                'price' => 2200000, 'topHot' => rand(0, 1),
                'detail' => 'TRACK PANTS ADICOLOR ÁNH KIM THÊU LOGO BA LÁ. Không thể nhầm lẫn. Diện lên mình phong cách adidas hoàn toàn mới mẻ với chiếc track pants này. 
            Chất liệu màng bạch kim tạo hiệu ứng như phủ lớp bạc lóng lánh. Nếu chừng đó vẫn chưa đủ nổi bật, các logo Ba Lá thêu nổi sẽ giúp bạn nâng tầm phong cách. 
            Tự tin chinh phục ngày mới. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            //Adidas -Quần short
            [
                'typeID' => 8, 'brandID' => 1, 'productName' => 'QUẦN SHORT 3 SỌC KẺ', 'image' => 'Quan_short_3_Soc_Ke_DJen_DH5798_21_model.jpg',
                'price' => 1200000, 'topHot' => rand(0, 1),
                'detail' => 'MẪU QUẦN SHORT VỚI PHONG CÁCH 3 SỌC KẺ VƯỢT THỜI GIAN. Mẫu quần short này tôn vinh phong cách adidas đích thực. 
            Quần may bằng vải thun vảy cá mềm mại cho cảm giác dễ chịu. Bộ sưu tập Adicolor. Lấy cảm hứng từ di sản của adidas, Adicolor hiện đại mà đậm chất adidas. 
            Các chi tiết mang tính biểu tượng.3 Sọc Kẻ đặc trưng và logo thêu Bông Hoa Ba Cánh khoe niềm tự hào adidas'
            ],
            [
                'typeID' => 8, 'brandID' => 1, 'productName' => 'Quần short thể thao nam Adidas - DU1577', 'image' => 'untitled1_92e9c598afcc4256826610bb88d9f238_small.jpg',
                'price' => 550000, 'topHot' => rand(0, 1),
                'detail' => 'Chiếc quần short tập luyện này giúp cho bạn khô ráo khi tăng cường độ tập luyện squat và đạp đùi. Chất vải siêu nhẹ giúp rũ sạch mồ hôi trên da bạn. 
            Miếng can bằng vải lưới mang lại khả năng thông khí có định hướng trong khi tập luyện.'
            ],
            [
                'typeID' => 8, 'brandID' => 1, 'productName' => 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143', 'image' => '6545908bf049b6d00aecf52e56ac7fd1.jpg',
                'price' => 600000, 'topHot' => rand(0, 1),
                'detail' => 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143 được sử dụng công nghệ hiện đại vào các sản phẩm quần áo để tăng cường sự lưu thông nhiệt 
            và độ ẩm cho người sử dụng suốt một ngày dài hoạt động. Thiết kế thời trang, năng động là sự kết hợp công nghệ của Adidas tạo sự thoải mái, uyển chuyển cho 
            người mặc. Màu sắc trang nhã, phong cách hiện đại sẽ góp phần khẳng định phong cách thời trang của bạn. Thiết kế trẻ trung năng động, dễ dàng mix đồ tao nên 
            phong cách thời trang cá tính riên bạn.'
            ],
            [
                'typeID' => 8, 'brandID' => 1, 'productName' => 'Adidas - Quần ngắn Nam 4K 3S+ Short Core Sport SS20-FJ72', 'image' => '14_4c5976ee30bf49a28a48189113677c1d_master.jpg',
                'price' => 1500000, 'topHot' => rand(0, 1),
                'detail' => 'Bạn không thể kiểm soát nhiệt độ. Nhưng bạn có thể kiểm soát mức độ thoải mái của bạn. Trải nhiệm với áo thun tập luyện Adidas này để luyện tập 
            trong những đợt nắng nóng. Chất vải nhẹ giúp làm mát, giữ cho bạn khô ráo và cho bạn hoàn toàn tự do di chuyển. Kiểu dáng đẹp và kỹ thuật khâu cao cấp với 
            đường khâu zigzag bền và kết thúc liên kết mịn.'
            ],
            [
                'typeID' => 8, 'brandID' => 1, 'productName' => 'QUẦN SHORT KẺ SỌC NHỎ ULTIMATE365 CLUB', 'image' => 'Quan_short_ke_soc_nho_Ultimate365_Club_DJen_FJ9866_21_model.jpg',
                'price' => 1795000, 'topHot' => rand(0, 1),
                'detail' => 'QUẦN SHORT CHƠI GOLF CHO CHUYỂN ĐỘNG DỄ DÀNG. Bỏ lại sau lưng tuần làm việc căng thẳng. Tập trung vào cú vung gậy với chiếc quần short chơi 
            golf adidas Ultimate365. Bạn sẽ có nhiều không gian để cử động cùng độ co giãn dễ chịu cho cảm giác thư thái và động tác đưa gậy theo bóng tự nhiên. 
            Hôm nào cũng là một ngày tuyệt vời để chơi golf.'
            ],
            //Adidas - Nón
            [
                'typeID' => 9, 'brandID' => 1, 'productName' => 'MŨ BÓNG CHÀY THÊU NỔI SIÊU NHẸ', 'image' => 'Mu_bong_chay_theu_noi_sieu_nhe_DJen_GM4509_01_standard.jpg',
                'price' => 380000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC MŨ LƯỠI TRAI TÙY CHỈNH LÀM TỪ CHẤT LIỆU TÁI CHẾ. Hãy đội chiếc mũ adidas này trước khi ra đường. 
            Mũ có chỉ số chống tia UV 50 giúp che chắn cho bạn khi tập luyện hay dạo phố. Chất vải siêu nhẹ và mượt mà trên da. 
            Điều chỉnh quai mũ phía sau cho độ vừa vặn phù hợp. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'typeID' => 9, 'brandID' => 1, 'productName' => 'MŨ BÓNG CHÀY 3 SỌC AEROREADY', 'image' => 'Mu_Bong_Chay_3_Soc_AEROREADY_DJen_GM6278_01_standard.jpg',
                'price' => 430000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC MŨ LƯỠI TRAI CLASSIC CHE NẮNG CHO BẠN. Đêm nóng, kem lạnh và mũ bóng chày. Mùa hè đến rồi. Hãy đi luyện ném bóng với chiếc mũ adidas này. 
            Công nghệ AEROREADY đánh bay mồ hôi và giúp bạn luôn thoáng mát trên sân tập. Vành cong che nắng cho mắt cùng 3 Sọc thể hiện tinh thần thể thao trong bạn. 
            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'typeID' => 9, 'brandID' => 1, 'productName' => 'MŨ PERFORMANCE', 'image' => 'Mu_Performance_DJen_FI3092_01_standard.jpg',
                'price' => 525000, 'topHot' => rand(0, 1),
                'detail' => 'MŨ CHƠI GOLF CO GIÃN TÍCH HỢP KHẢ NĂNG KHÁNG TIA UV. Duy trì sự tập trung trên sân golf trong những ngày ẩm ướt. Chiếc mũ chơi golf adidas này cho độ 
            che chắn vượt trội suốt những vòng golf ngập nắng. Kiếm tìm cảm giác vừa vặn tuyệt đối cho riêng bạn để chinh phục 18 lỗ golf.'
            ],
            [
                'typeID' => 9, 'brandID' => 1, 'productName' => 'MŨ DAD CAP', 'image' => 'Mu_Dad_Cap_DJen_FK3189_01_standard.jpg',
                'price' => 400000, 'topHot' => rand(0, 1),
                'detail' => 'MŨ VẢI TWILL MỀM MẠI VỚI KIỂU DÁNG VÀ CẢM GIÁC THOẢI MÁI, ÍT ĐỊNH HÌNH HƠN. Thư giãn với phong cách phóng khoáng và xu hướng thoải mái. 
            Chiếc mũ adidas Dad Cap mang đến phong cách thường ngày với kiểu dáng và cảm giác mềm mại. Vành mũ cong sẵn tạo ấn tượng như một món phụ kiện được yêu thích từ 
            lâu ngay từ lần đội đầu tiên.'
            ],
            [
                'typeID' => 9, 'brandID' => 1, 'productName' => 'MŨ BUCKET BA LÁ', 'image' => 'Mu_bucket_Ba_La_DJen_AJ8995_01_standard.jpg',
                'price' => 600000, 'topHot' => rand(0, 1),
                'detail' => 'CHIẾC MŨ PHONG CÁCH MÙA HÈ ĐẦY CÁ TÍNH. Khoe phong cách mùa hè của bạn với chiếc mũ bucket Core. Với chất vải twill cotton mềm mại và thoáng khí, 
            chiếc mũ này có thêu logo Ba Lá ở mặt trước tạo điểm nhấn phong cách.'
            ]
        ]);
        //Gucci
        DB::table('products')->insert([
            //Gucci - Áo sơ mi (2-1)
            [
                'typeID' => 1, 'brandID' => 2, 'productName' => 'Áo sơ mi tay dài thời trang nam', 'image' => '73ea5145066e70452a1363afedd8eafa.jpg',
                'price' => 230000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi tay dài thời trang nam họa tiết Gucci - Chất liệu: kate lụa - Hàng có sẵn'
            ],
            [
                'typeID' => 1, 'brandID' => 2, 'productName' => 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp', 'image' => 'ao_so_mi_gucci_chat_vai_lanh_bong_han_quoc.jpg',
                'price' => 280000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp'
            ],
            [
                'typeID' => 1, 'brandID' => 2, 'productName' => 'Áo sơ mi nam tay dài họa tiết cao cấp Gucci RSM051', 'image' => 'ao-so-mi-nam-gucci-rsm051.jpg',
                'price' => 240000, 'topHot' => rand(0, 1),
                'detail' => 'Chất liệu: Kate lụa cao cấp, siêu mềm mịn, dày dặn, mặc cực thoải mái. Màu sắc: Trắng'
            ],
            //Gucci - phông (Thun) (2-2)
            [
                'typeID' => 2, 'brandID' => 2, 'productName' => 'Áo Polo Gucci Polo Ss2019 Màu Trắng', 'image' => 'ao-polo-gucci-polo-ss2019-mau-trang-5e71d4a8907bb-18032020145832.jpg',
                'price' => 12050000, 'topHot' => rand(0, 1),
                'detail' => 'Áo Polo Gucci Polo Ss2019 Màu Trắng được thiết kế cổ bẻ, tay ngắn, có họa tiết con ong nhiều màu đặc trưng của 
            Gucci tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. 
            Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc.'
            ],
            [
                'typeID' => 2, 'brandID' => 2, 'productName' => 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương', 'image' => 'ao-polo-gucci-blue-polo-ss20-mau-xanh-duong-5e71cc4852f2f-18032020142248.jpg',
                'price' => 12050000, 'topHot' => rand(0, 1),
                'detail' => 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương được thiết kế cổ bẻ, tay ngắn, có họa tiết GG ở ngực đặc trưng của Gucci tạo nên sự năng động, 
            trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái 
            cho người mặc.'
            ],
            [
                'typeID' => 2, 'brandID' => 2, 'productName' => 'Áo Polo Gucci Ss2020 Màu Be', 'image' => 'ao-polo-gucci-ss2020-mau-trang-5e71b8e5d1ff4-18032020130005.jpg',
                'price' => 16900000, 'topHot' => rand(0, 1),
                'detail' => 'Áo được làm với chất liệu 100% cotton mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc. Form áo với các đường may vô cùng tinh tế và 
            chắc chắn hài lòng mọi khách hàng. Màu sắc đơn giản dễ dàng kết hợp với các trang phục khác nhau cho bạn trở nên nổi bật hơn. Áo thiết kế cổ bẻ, tay ngắn phù 
            hợp mặc trong nhiều hoàn cảnh khác nhau, từ công sở lịch lãm đến những trang phục mặc thường ngày.'
            ],
            //Gucci - Áo khoác (2-3)
            [
                'typeID' => 3, 'brandID' => 2, 'productName' => 'Blue & Off-White \'Gucci Band\' Varsity Jacket', 'image' => 'gucci-blue-and-off-white-gucci-band-varsity-jacket.jpg',
                'price' => 6200000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác len ống tay dài và áo khoác bomber da cừu màu tím và trắng. Cổ áo đứng, cổ tay áo và viền len đan có gân lệch. Đóng cửa báo chí ở phía trước. 
            Các mảng logo thêu nhiều màu ở ngực. Túi có dây có đinh kim tự tháp ở eo. Văn bản và đồ họa thêu có màu trắng, đen, đỏ và xanh lam ở phía sau. 
            Túi vá có nút ở nội thất. Lót satin chần bông màu hồng. Màu của nhà cung cấp: Xanh lam. Sản xuất tại Ý.'
            ],
            [
                'typeID' => 3, 'brandID' => 2, 'productName' => 'Áo khoác Gucci Technical Jersey Jacket', 'image' => 'Gucci-Technical-Jersey-Jacket.jpg',
                'price' => 21600000, 'topHot' => rand(0, 1),
                'detail' => 'Lấy cảm hứng từ thời trang thập niên 90, thời kì hoàng kim của thời trang sportwear, áo khoác Gucci Technical Jersey Jacket có thiết kế như một chiếc áo khoác thể thao 
            với phần cổ cao, hai dải băng trắng – xanh lam chạy dọc hai bên cánh tay, nổi bật tên thương hiệu màu đỏ. Phần cổ tay bo chun trang trí bằng sọc xanh – 
            đỏ đặc trưng của hãng.'
            ],
            [
                'typeID' => 3, 'brandID' => 2, 'productName' => 'Black & White Patch Bomber Jacket', 'image' => 'gucci-black-and-white-patch-bomber-jacket.jpg',
                'price' => 5500000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác bomber dài tay bằng len chải đen và da cừu trắng \'tự nhiên\'. Cổ áo đứng đan gân, cổ tay áo và viền sọc trắng và đỏ. 
            Đóng cửa báo chí ở phía trước. Đính thêu màu đen, đỏ và trắng ở ngực. Túi có dây ở eo. Các họa tiết thêu chữ màu xanh lam và màu cam ở phía sau. 
            Túi có dây ở bên trong. Đã lót đầy đủ. Phần cứng âm có khắc logo. Đường khâu theo đường chéo. Sản xuất tại Ý.'
            ],
            //Gucci - Dép(2-4)
            [
                'typeID' => 4, 'brandID' => 2, 'productName' => 'Black Pursuit Slides', 'image' => 'gucci-black-pursuit-slides.jpg',
                'price' => 7000000, 'topHot' => rand(0, 1),
                'detail' => 'Dép xỏ ngón cao su màu đen. Mở ngón chân tròn. Các sọc đặc trưng màu đỏ và xanh lá cây ở vamp. Chân đế cao su đúc. 
                Đế giữa bằng cao su có kết cấu hình tam giác có logo in nổi ở mặt ngoài. Đế ngoài bằng cao su có rãnh tam giác. Sản xuất tại Ý.'
            ],
            [
                'typeID' => 4, 'brandID' => 2, 'productName' => 'Dép Gucci Men’s GG Disney', 'image' => 'm2.jpg',
                'price' => 9900000, 'topHot' => rand(0, 1),
                'detail' => 'Sự đồng bộ về tư duy và triết lý thẩm mỹ được gìn giữ qua nhiều thế hệ của nhà Gucci. Bắt nguồn từ lối sống xa hoa và phô trương 
            của giới quý tộc Châu Âu những năm đầu thế kỷ 20, nghề thủ công bậc thầy và thẩm mỹ nghệ thuật thời trang đậm chất Ý đã cho ra đời các “tác phẩm” chất 
            lượng cao cấp, xa xỉ và có giá trị vượt thời gian.'
            ],
            [
                'typeID' => 4, 'brandID' => 2, 'productName' => 'Gucci Kids', 'image' => 'Gucci_Kids.png',
                'price' => 6500000, 'topHot' => rand(0, 1),
                'detail' => 'Lấy dấu hiệu từ giày nam và giày nữ, sọc Gucci được làm lại bằng cao su, nâng cao mặt trước của một đôi sandal trượt dành cho trẻ em. 
            Họa tiết thể thao lấy cảm hứng từ biểu tượng băng chạy dọc hai bên của bộ đồ thể thao cổ điển từ những năm 80. Các đường trượt hồ bơi này có lớp cao su 
            màu trắng với sọc Gucci đỏ và đen, chân đế cao su đúc và logo Gucci in nổi trên đế. Sản xuất tại Ý'
            ],
            //Gucci - Giầy(2-5)
            [
                'typeID' => 5, 'brandID' => 2, 'productName' => 'Giày Gucci Calfskin Black Sneaker Đen', 'image' => 'giay-gucci-calfskin-black-sneaker-mau-den-5efeec1a1f02f-03072020152810.jpg',
                'price' => 9450000, 'topHot' => rand(0, 1),
                'detail' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, 
            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn 
            cảm thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp 
            từng đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục 
            khác nhau để thay đổi phong cách cho bản thân theo sở thích. '
            ],
            [
                'typeID' => 5, 'brandID' => 2, 'productName' => 'Giày Thể Thao Gucci Ace Signature Sneaker Đen', 'image' => 'giay-ace-gucci-signature-sneaker-mau-den-5d8ec921c06a7-28092019094449.jpg',
                'price' => 15000000, 'topHot' => rand(0, 1),
                'detail' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, 
            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm 
            thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng 
            đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục khác 
            nhau để thay đổi phong cách cho bản thân theo sở thích. '
            ],
            [
                'typeID' => 5, 'brandID' => 2, 'productName' => 'Giày Gucci Men\'s Ace Embroidered Sneaker Trắng', 'image' => 'giay-gucci-men-s-ace-embroidered-sneaker-mau-trang-5e04762f9f7ed-26122019155823.jpg',
                'price' => 16200000, 'topHot' => rand(0, 1),
                'detail' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, tràn đầy sức sống. 
            Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm thấy thoải mái. Giày basic 
            rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng đường kim mũi chỉ đảm bảo hài lòng ngay 
            cả với khách hàng khó tính nhất. Màu sắc trắng dễ dàng kết hợp với nhiều trang phục khác nhau để thay đổi phong cách cho bản thân theo sở thích. 
            Sneaker Gucci GC luôn là sự lựa chọn hàng đầu bởi sự năng động, trẻ trung, tiện dụng, dễ dàng phối kết hợp với nhiều bộ trang phục và phù hợp trong 
            nhiều hoàn cảnh khác nhau.'
            ],
            //Gucci - Quần dài(2-6)
            [
                'typeID' => 6, 'brandID' => 2, 'productName' => 'Beige GG Logo Lounge Pants', 'image' => 'gucci-beige-gg-logo-lounge-pants.jpg',
                'price' => 35000000, 'topHot' => rand(0, 1),
                'detail' => 'Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise. Two-pocket styling. Drawstring in off-white at 
            elasticized waistband. Rib knit cuffs in beige. Supplier color: Camel. Body: 55% polyester, 45% cotton. Trim: 72% polyester, 25% polyamide, 3% elastane. 
            Made in Italy.'
            ],
            [
                'typeID' => 6, 'brandID' => 2, 'productName' => 'Brown GG Flora Lounge Pants', 'image' => 'gucci-brown-gg-flora-lounge-pants.jpg',
                'price' => 37000000, 'topHot' => rand(0, 1),
                'detail' => 'Tapered technical jersey lounge pants featuring logo pattern in brown and beige and multicolor graphic print throughout. Mid-rise. 
            Drawstring in off-white at elasticized waistband. Two-pocket styling. Tape trim in red and green at outseams. Supplier color: Brown 61% polyester, 
            39% cotton. Made in Italy.'
            ],
            [
                'typeID' => 6, 'brandID' => 2, 'productName' => 'Quần Gucci Technical Jersey', 'image' => 'Quan-Gucci-Technical-Jersey-14234.jpg',
                'price' => 23000000, 'topHot' => rand(0, 1),
                'detail' => 'Quần Gucci Technical Jersey được thiết kế theo phong cách thể thao với hai dải băng sọc màu be bên hông, 
            phần gấu được bo chun nổi bật với những vạch kẻ đỏ – xanh lá vô cùng đặc trưng của hãng. Dòng chữ GUCCI cững được đặt khéo léo giữa các 
            đường kẻ bên hông quần, tạo nên sự nổi bật. Quần có hai túi trước và hai túi sau vô cùng tiện dụng. Quần và áo khoác Gucci Technical Jersey là 
            một sự kết hợp hoàn hảo đại diện cho phong cách athleisure năng động, thời thượng. Tuy nhiên, bạn cũng có thể kết hợp quần Gucci cùng áo phông, 
            sweater hay hoodie để tạo nên bản sắc thời trang riêng.'
            ],
            //Gucci - Quần jean(2-7)
            [
                'typeID' => 7, 'brandID' => 2, 'productName' => 'Indigo GG Jeans', 'image' => 'gucci-indigo-gg-jeans.jpg',
                'price' => 29000000, 'topHot' => rand(0, 1),
                'detail' => 'Flared non-stretch denim jeans in indigo featuring logo pattern in tan. High-rise. Subtle fading throughout. 
            Five-pocket styling. Belt loops at waistband. Leather logo patch in black and gold-tone at back waistband. Buffed lambskin trim in brown at back pocket. 
            Zip-fly. Antiqued brass-tone and copper-tone hardware. Supplier color: Dark blue. Body: 100% cotton. Trim: 100% lambskin. Made in Italy.'
            ],
            [
                'typeID' => 7, 'brandID' => 2, 'productName' => 'Blue Symbol Tapered Jeans', 'image' => 'gucci-blue-symbol-tapered-jeans.jpg',
                'price' => 31500000, 'topHot' => rand(0, 1),
                'detail' => 'Tapered non-stretch denim jeans in blue. Mid-rise. Multicolor embroidered graphic patches, fading, and whiskering throughout. 
            Five-pocket styling. Belt loops at waistband. Leather logo patch in tan at back waistband. Button-fly. Silver-tone hardware. Contrast stitching in tan. 
            Supplier color: Blue. Body: 100% cotton. Trim: 100% cotton. Made in Italy.'
            ],
            [
                'typeID' => 7, 'brandID' => 2, 'productName' => 'Black Skinny Jeans', 'image' => 'gucci-black-skinny-jeans.jpg',
                'price' => 15000000, 'topHot' => rand(0, 1),
                'detail' => 'Skinny-fit washed stretch denim jeans in black. Mid-rise. Five-pocket styling. Belt loops at waistband. Embossed 
            leather logo patch in black and gold-tone at back waistband. Zip-fly. Antiqued bronze-tone and copper-tone hardware. Supplier color: 
            Black. Body: 98% cotton, 2% elastane. Made in Italy.'
            ],
            //Gucci - Quần short(2-8)
            [
                'typeID' => 8, 'brandID' => 2, 'productName' => 'Tiger Head Applique Stripe Cotton Shorts', 'image' => 'gucci-tiger-head-applique-stripe-cotton-shorts-brand-size-small-497251-x9i98-1295.jpg',
                'price' => 21000000, 'topHot' => rand(0, 1),
                'detail' => 'Gucci Men\'s Bottoms. Fashion category: Shorts. SKU: 497251 X9I98 1295. Color: Grey. Tiger Head Applique Stripe Cotton Shorts. 
            Crafted in grey felted cotton jersey, this shorts from Gucci features an elasticated waistband with drawstring detail, front pockets and Gucci 
            jacquard stripe with tiger head applique. Material: 100% Cotton. Made in Italy.'
            ],
            [
                'typeID' => 8, 'brandID' => 2, 'productName' => 'Blue Denim Eco Washed GG Shorts', 'image' => 'gucci-blue-denim-eco-washed-gg-shorts.jpg',
                'price' => 23000000, 'topHot' => rand(0, 1),
                'detail' => 'Non-stretch organic cotton denim shorts in blue. Jacquard logo pattern in beige throughout. Mid-rise. Four-pocket styling. 
            Partially elasticized waistband. Lambskin trim in tan at back pockets. Button-fly. Brown hardware.Supplier color: Dark blue. Body: 100% cotton. 
            Trim: 100% lambskin. Made in Italy. '
            ],
            [
                'typeID' => 8, 'brandID' => 2, 'productName' => 'Black GG Peony Print Shorts', 'image' => 'gucci-black-gg-peony-print-shorts.jpg',
                'price' => 28000000, 'topHot' => rand(0, 1),
                'detail' => 'Silk crepe shorts in black featuring tonal logo pattern throughout. Mid-rise. Multicolor floral pattern throughout. 
            Four-pocket styling. Elasticized waistband. Button-fly. Supplier color: Black/Pink. Body: 100% silk. Lining: 100% cotton. Made in Italy.'
            ],
            //Gucci - Nón(2-9)
            [
                'typeID' => 9, 'brandID' => 2, 'productName' => 'Mũ Gucci Original GG Canvas Black', 'image' => 'mu-gucci-original-gg-canvas-black-5d9446b2bb3f7-02102019134154.jpg',
                'price' => 6500000, 'topHot' => rand(0, 1),
                'detail' => 'Mũ Gucci Original GG Canvas Black màu đen là chiếc mũ unisex cao cấp, làm bằng chất liệu vải Canvas được in hình logo "GG" nối nhau đặc trưng của hãng Gucci, 
            xung quanh mũ được may với các đường chỉ cực kì sắc nét.'
            ],
            [
                'typeID' => 9, 'brandID' => 2, 'productName' => 'Mũ Gucci Original GG Canvas Baseball With Web Beige', 'image' => 'mu-gucci-original-gg-canvas-baseball-with-web-beige-5c85ea2fac92b-11032019115511.jpg',
                'price' => 6200000, 'topHot' => rand(0, 1),
                'detail' => 'Hai bên mũ được thêu mỗi tấm vải gồm 2 màu đỏ xanh huyền thoại của hãng Gucci. Lưỡi mũ được bao bọc 1 miếng da quanh viền và được may mỗi tấm vải 2 bên với những đường chỉ rất tinh tế. 
            Miếng dán bằng da sau mũ, điều chỉnh tăng giảm được.'
            ],
            [
                'typeID' => 9, 'brandID' => 2, 'productName' => 'Mũ Gucci Original GG Canvas Baseball With Web Black', 'image' => 'mu-gucci-original-gg-canvas-baseball-with-web-size-m-5d1430bac03e2-27062019095802.jpg',
                'price' => 7600000, 'topHot' => rand(0, 1),
                'detail' => 'Mũ Gucci Original GG Canvas Baseball With Web Black Size M là chiếc mũ cho nam cao cấp, làm bằng chất liệu vải Canvas được 
            in hình logo "GG" nối nhau đặc trưng của hãng Gucci, xung quanh mũ được may với các đường chỉ cực kì sắc nét.'
            ]
        ]);
        //Supreme
        DB::table('products')->insert([
            //Supreme - Áo sơ mi(3-1)
            [
                'typeID' => 1, 'brandID' => 3, 'productName' => 'Supreme Men\'s Black X Mike Kelley More Love Hours Shirt', 'image' => 'supremeblackXMikeKelleyMoreLoveHoursShirt.jpeg',
                'price' => 11115000, 'topHot' => rand(0, 1),
                'detail' => 'Chiếc áo Rayon Supreme x Mike Kelley "More Love Hours" là sự hợp tác giới hạn giữa gã khổng lồ thời trang đường phố NYC và nghệ sĩ 
                người Mỹ nổi tiếng với những tác phẩm trừu tượng. Chiếc áo sơ mi rayon thời tiết ấm áp, với kết cấu thoáng mát và phong cách dễ mặc, là tác phẩm 
                nghệ thuật sống động của Kelly, bao gồm các nhân vật thú nhồi bông khác nhau trong một bản in toàn bộ. Chi tiết nút trắng ở mặt trước của áo và một túi 
                ngực duy nhất tạo nên nét hoàn thiện cho chiếc áo sơ mi tay ngắn. Áo Rayon Supreme x Mike Kelley "More Love Hours" được phát hành trong mùa Thu / 
                Đông 2018 của Supreme'
            ],
            [
                'typeID' => 1, 'brandID' => 3, 'productName' => 'SupremeObamaShirt', 'image' => 'Supreme Obama Shirt.jpg',
                'price' => 9800500, 'topHot' => rand(0, 1),
                'detail' => 'Tổng thống của bạn là ai? Hãy thể hiện lòng trung thành của bạn với Tổng thống thứ 44 của Hoa Kỳ với chiếc Áo sơ mi Obama cotton màu xanh 
                lá cây này của Supreme. Có bạn có thể. Có hình in toàn bộ, hình in ảnh, cổ áo nhọn, cài nút phía trước, tay áo ngắn và túi trước ngực'
            ],
            [
                'typeID' => 1, 'brandID' => 3, 'productName' => 'Supreme Rose Buffalo Plaid Shirt', 'image' => 'SupremeRoseBuffaloPlaidShirt.jpg',
                'price' => 6204000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi sọc ca rô trâu bông hồng bông màu xanh hoàng gia của hãng tối cao có cổ áo cổ điển, cài cúc phía trước, tay áo dài, khuy cài và viền cong. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, 
                họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            [
                'typeID' => 1, 'brandID' => 3, 'productName' => 'Supreme x Comme des Garçons Graphic Button Up Shirt', 'image' => 'SupremexCommedesGarçonsGraphicButtonUpShirt.png',
                'price' => 9778000, 'topHot' => rand(0, 1),
                'detail' => 'Comme des Garçons x Supreme Graphic Button-Up Shirt là một món đồ trang nhã hoặc giản dị tập hợp những lý tưởng của hai gã khổng 
                lồ thời trang dạo phố. Mặt trước của chiếc áo được dán một tấm ảnh ghép của thành phố New York. Thể hiện niềm tự hào quê hương của Supreme, 
                các hình ảnh bao gồm Tượng Nữ thần Tự do, đường chân trời của NYC, các toa tàu điện ngầm và các biển hiệu neon NYC. Ở mặt sau "Comme des Garçons - 
                Áo sơ mi tối cao" được in bằng phông chữ màu trắng và được đặt trên nền đen đồng nhất -- Sản xuất tại Pháp '
            ],
            [
                'typeID' => 1, 'brandID' => 3, 'productName' => 'Supreme CDG Harold Hunter baseball top', 'image' => 'SupremeCDGHaroldHunterbaseballtop.png',
                'price' => 14090000, 'topHot' => rand(0, 1),
                'detail' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Hãy giữ cho trang phục thường ngày trở nên thú vị 
                với việc bổ sung chiếc áo khoác này từ tối cao. Được làm thủ công từ bông, chiếc áo bóng chày này có in hình Harold Hunter. Khá là đoạn hội thoại! 
                Có cổ tròn, tay ngắn, cài cúc trước và in hình họa tiết -- Sản xuất tại Pháp '
            ],
            //Supreme - Áo Thun (3-2)
            [
                'typeID' => 2, 'brandID' => 3, 'productName' => 'Supreme Bela Lugosi Tee', 'image' => 'SupremeBelaLugosiTee.png',
                'price' => 1893000, 'topHot' => rand(0, 1),
                'detail' => 'Supreme Bela Lugosi Tee dành cho những người hâm mộ ma cà rồng, những người đánh giá cao cơn sốt Gothic 
            nguyên bản bắt đầu từ gần 100 năm trước. Hình ảnh ở giữa ngực có hình ảnh nổi tiếng trong bộ phim kinh điển năm 1931 "Dracula", 
            trong đó nam diễn viên Bela Lugosi, đóng vai bá tước chính hiệu, chuẩn bị cắn vào cổ một người phụ nữ. Được làm từ cotton, 
            áo thun tay ngắn này có màu đỏ đặc. Lugosi, tên khai sinh là Béla Ferenc Dezső Blaskó, là một diễn viên người Mỹ gốc Hungary nổi 
            tiếng với vai Bá tước Dracula trong phim -- Sản xuất tại Hoa Kỳ '
            ],
            [
                'typeID' => 2, 'brandID' => 3, 'productName' => 'Supreme Winter Print T-shirt', 'image' => 'SupremeWinterPrintT-shirt.png',
                'price' => 2123000, 'topHot' => rand(0, 1),
                'detail' => 'Cảm thấy lạnh mùa đông? Giải quyết điều đó một cách dễ dàng với chiếc áo phông có logo mùa đông cotton trắng này của Supreme. 
                Sẽ sớm trở thành mùa yêu thích mới của bạn. Có cổ tròn, tay ngắn, in hình họa tiết và phom dáng vừa vặn -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'typeID' => 2, 'brandID' => 3, 'productName' => 'Supreme Faces Print T-shirt', 'image' => 'SupremeFacesPrintT-shirt.png',
                'price' => 2377000, 'topHot' => rand(0, 1),
                'detail' => 'Tối và quyến rũ. Chiếc áo phông in hình mặt cotton màu xanh nước biển này của Supreme có ống tay dài vừa vặn thoải mái, 
                hoàn chỉnh với hình in đồ họa của những khuôn mặt không có mắt để tạo nên một kết thúc kỳ cục. Bạn sẽ có mọi ánh nhìn về bạn. Đặc 
                trưng với cổ tròn, tay áo dài, viền và cổ tay áo có gân -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'typeID' => 2, 'brandID' => 3, 'productName' => 'Supreme Printed Pocket T-shirt', 'image' => 'SupremePrintedPocketT-shirt.png',
                'price' => 3715000, 'topHot' => rand(0, 1),
                'detail' => 'Bỏ tất cả những rắc rối của bạn vào \'túi\' và đi khám phá thế giới trong chiếc áo phông đen tối cao này. Tất cả đều tốt'
            ],
            [
                'typeID' => 2, 'brandID' => 3, 'productName' => 'Supreme Logo T-shirt', 'image' => 'SupremeLogoT-shirt.png',
                'price' => 5146000, 'topHot' => rand(0, 1),
                'detail' => 'Chiếc áo phông này khẳng định gu thẩm mỹ đường phố của Supreme. Được làm từ cotton, chiếc áo phông này có cổ tròn, 
                tay dài và in logo trên áo. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. 
                Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            //Supreme - Áo Khoác (3-3)
            [
                'typeID' => 3, 'brandID' => 3, 'productName' => 'Supreme City Lights Puffer Jacket', 'image' => 'SupremeCityLightsPufferJacket.png  ',
                'price' => 13614000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác ngoài như một suy nghĩ sau? Không còn nữa. Chiếc áo khoác tay phồng City Lights này của Supreme sẽ là tâm điểm trong 
                toàn bộ diện mạo của bạn'
            ],
            [
                'typeID' => 3, 'brandID' => 3, 'productName' => 'Supreme Cowboy Print Denim Work Jacket', 'image' => 'SupremeCowboyPrintDenimWorkJacket.png',
                'price' => 26558000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác denim họa tiết cao bồi bằng cotton nhiều màu của hãng cao cấp có cổ áo nhọn, khóa zip phía trước, hai túi phía trước và hình 
            in đồ họa. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm 
            kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            [
                'typeID' => 3, 'brandID' => 3, 'productName' => 'Supreme Aerial Tapestry Harrington Jacket', 'image' => 'SupremeAerialTapestryHarringtonJacket.png',
                'price' => 14721000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác Aerial Tapestry Harrington điểm nổi bật màu xanh da trời bông. Đường chân trời của Thành phố New York cổ điển buộc phía trước 
                giấu kín áo dài tay -- Sản xuất tại Hoa Kỳ '
            ],
            [
                'typeID' => 3, 'brandID' => 3, 'productName' => 'Supreme Reversible Color Blocked Fleece Jacket', 'image' => 'SupremeReversibleColorBlockedFleeceJacket.png',
                'price' => 11699000, 'topHot' => rand(0, 1),
                'detail' => 'Nếu điều đầu tiên xuất hiện trong đầu bạn khi nhìn vào bức tranh này, là bức tranh của Mondrian, thì bạn đang đi đúng hướng. 
                Tự hào với bản in hình học nhiều màu, chiếc áo khoác lông cừu tối cao này sẽ trở thành một nghệ sĩ thực thụ - ý của chúng tôi là phong cách.'
            ],
            [
                'typeID' => 3, 'brandID' => 3, 'productName' => 'Supreme Patchwork Anorak Jacket', 'image' => 'SupremePatchworkAnorakJacket.png',
                'price' => 61653000, 'topHot' => rand(0, 1),
                'detail' => 'Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép 
                và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới. Đắm mình trong văn 
                hóa trượt ván của New York và tinh thần vô tư của tuổi trẻ với những sản phẩm mới nhất này từ thương hiệu thời trang dạo phố mang tính biểu 
                tượng Supreme. Chiếc áo khoác anorak chắp vá bằng cotton nhiều màu này có mũ trùm đầu bằng dây rút, khóa zip phía trước, túi phía trước được 
                giấu kín, logo trước ngực, túi trước và tay áo dài'
            ],
            //Supreme - Dép (3-4)
            [
                'typeID' => 4, 'brandID' => 3, 'productName' => 'Supreme Flip Flop Sandals Black White', 'image' => 'SupremeFlipFlopSandalsBlackWhite.jpg',
                'price' => 1593000, 'topHot' => rand(0, 1),
                'detail' => 'Dép xỏ ngón Supreme Đế ngoài bằng cao su tự nhiên, siêu thoải mái, đế trượt nano, đế mút chống trượt.'
            ],
            [
                'typeID' => 4, 'brandID' => 3, 'productName' => 'Supreme Suprize Design 2018ss White Red Sandals Slippers', 'image' => 'SupremeSuprizeDesign2018ssWhiteRedSandalsSlippers.jpg',
                'price' => 1593000, 'topHot' => rand(0, 1),
                'detail' => 'Thiết kế tinh tế mới nhất của Supreme Suprize 2018 với Dép sandal nam nữ màu trắng / đỏ '
            ],
            [
                'typeID' => 4, 'brandID' => 3, 'productName' => 'Supreme Suprize Design 2018ss Black White Sandals Slippers', 'image' => 'SupremeSuprizeDesign2018ssBlackWhiteSandalsSlippers.jpg',
                'price' => 1592000, 'topHot' => rand(0, 1),
                'detail' => 'Chất lượng cao Supreme Suprize Design 2018ss Dép nam nữ màu đen / trắng '
            ],
            [
                'typeID' => 4, 'brandID' => 3, 'productName' => 'Supreme Flip Flop Sandals White Red Summer Beach Slippers', 'image' => 'SupremeFlipFlopSandalsWhiteRedSummerBeachSlippers.jpg',
                'price' => 1593000, 'topHot' => rand(0, 1),
                'detail' => 'Dép xỏ ngón Supreme chất lượng cao cho nam-nữ đi biển mùa hè trắng / đỏ Dép đi trong nhà'
            ],
            [
                'typeID' => 4, 'brandID' => 3, 'productName' => 'Supreme Frette Slippers White ', 'image' => 'SupremeFretteSlippersWhite.png',
                'price' => 2769000, 'topHot' => rand(0, 1),
                'detail' => 'Supreme đã cùng với nhà sản xuất kính râm, Frette, hợp tác sản xuất một đôi dép lê. Đôi dép được phát hành với hai màu, đỏ và trắng, và có từ "Supreme" được viết trên đôi. 
                Supreme x Frette Slippers được phát hành vào thứ Năm, ngày 6 tháng 6 năm 2019'
            ],
            //Supreme - Giày (3-5)
            [
                'typeID' => 5, 'brandID' => 3, 'productName' => 'Supreme Vans Authentic Pro Checkered Red', 'image' => 'SupremeVansAuthenticProCheckeredRed.jpg',
                'price' => 45155000, 'topHot' => rand(0, 1),
                'detail' => 'Supreme chuẩn bị cho Vans ’Skate-ready Pro Authentic Pro với một sự thay đổi độc đáo trong thiết kế bàn cờ, có in ca rô màu đỏ và trắng có gắn logo hộp Supreme vào thiết kế. 
                Tương phản với đế giữa màu trắng, đôi giày cũng thực hiện mô hình lực kéo bánh quế cổ điển trên đế ngoài.'
            ],
            [
                'typeID' => 5, 'brandID' => 3, 'productName' => 'Supreme NIke x NBA x Air Force 1 Mid 07 \'White\' AQ8017-100', 'image' => 'SupremeNIkexNBAxAirForce1Mid07\'White\'AQ8017-100.jpg',
                'price' => 16983000, 'topHot' => rand(0, 1),
                'detail' => 'Supreme và Nike đã bỏ một sự hợp tác lớn khác cho mùa xuân / hè 2018 khi họ hợp tác với NBA. 
                Bộ sưu tập giày dép và quần áo có in toàn bộ bao gồm các logo NBA và Supreme. Điểm nổi bật của bộ sưu tập là 
                Supreme x NBA x Nike Air Force 1 Mid. Một sự trở lại với thời trang dạo phố đầu năm 2000, phối màu trắng này 
                của Supreme x NBA x Nike Air Force 1 Mid có phần trên bằng da cao cấp với chữ "Supreme" được thêu trên dây đeo mắt cá chân.'
            ],
            [
                'typeID' => 5, 'brandID' => 3, 'productName' => 'Supreme Nike Air More Uptempo Suptempo Red', 'image' => 'NikeAirMoreUptempoSupremeSuptempoRed.jpg',
                'price' => 31357000, 'topHot' => rand(0, 1),
                'detail' => 'Được thiết kế bởi Wilson Smith, được mặc bởi Scottie Pippen, Nike Air More Uptempo - 
                được biết đến với thương hiệu “AIR” lớn ở hai bên và giữa - là một trong những đôi giày thể thao bóng 
                rổ táo bạo nhất từ trước đến nay. Thương hiệu thời trang dạo phố mang tính biểu tượng Supreme cũng được 
                tôn kính theo cách tương tự, nhờ hơn 20 năm cung cấp hàng hóa phù hợp với văn hóa được tạo ra trong nhà và 
                thông qua các hoạt động hợp tác. Các từ xung đột trong ví dụ thứ hai năm 2017 này - một bản cộng tác giày thể 
                thao được gọi là “Suptempo”. Ngôi nhà mà James Jebbia xây dựng đã đặt vòng quay của nó trên Air More Uptempo, 
                thay thế thông điệp “AIR” bằng “SUPREME” trong chữ in đậm được cấp bằng sáng chế bao quanh gót chân. Tùy chọn 
                Varsity Red này có phần trên bằng da lộn sôi động. Chữ Tối cao có màu trắng với ánh sáng trong bóng tối; midsole 
                cũng được tạo điểm nhấn bởi Varsity Red và trắng. Các đầu ren có các từ "Thế giới" và "Nổi tiếng".'
            ],
            [
                'typeID' => 5, 'brandID' => 3, 'productName' => 'Supreme Comme des Garcons Nike Air Force 1 Low Shirt', 'image' => 'SupremeCommedesGarconsNikeAirForce1LowShirt.jpg',
                'price' => 33872000, 'topHot' => rand(0, 1),
                'detail' => 'Bộ sưu tập Xuân / Hè 2017 của Supreme bao gồm sự hợp tác rất được mong đợi với COMME des GARÇONS SHIRT. 
                Bản phát hành lấy cảm hứng từ tác phẩm ‘Giải phẫu giấy’ của nghệ sĩ ý tưởng Stephen J Shanabrook, được anh sử dụng 
                làm tài liệu nguồn cho quảng cáo trong chiến dịch Xuân / Hè 2010 của COMME des GARÇONS SHIRT. Phần trang phục của bộ 
                sưu tập Supreme x COMME des GARÇONS SHIRT xuất hiện đầu tiên, tiếp theo là phiên bản đầy nghệ thuật này của Nike Air Force 1. 
                Màu trắng băng giá trên nền trắng. Đồng thương hiệu Supreme và CDG xuất hiện ở mặt trong của lưỡi để hoàn thiện thiết kế sạch sẽ.'
            ],
            [
                'typeID' => 5, 'brandID' => 3, 'productName' => 'Supreme Nike Air Max 98 Snakeskin', 'image' => 'SupremeNikeAirMax98Snakeskin.jpg',
                'price' => 16429000, 'topHot' => rand(0, 1),
                'detail' => 'Dễ dàng là phối màu được tìm kiếm nhiều nhất của sự hợp tác năm 2016 giữa Supreme và Nike, phiên bản này kỳ lạ với phần trên bằng da 
                rắn với lưới màu xám và các chi tiết phản chiếu.'
            ],
            //Supreme - Quần dài (3-6)
            [
                'typeID' => 6, 'brandID' => 3, 'productName' => 'Supreme Warm Up Pants SS18', 'image' => 'SupremeWarmUpPantsSS18.jpg',
                'price' => 4313000, 'topHot' => rand(0, 1),
                'detail' => 'Quần Supreme Warm Up là một mẫu quần trong bộ sưu tập Xuân / Hè 2018 của thương hiệu giày trượt băng. Một họa tiết rằn ri 
                màu xanh lam với màu xanh lá cây, xám và đen quân sự bao phủ ống quần. Được thiết kế với nhiều khoảng trống, những chiếc quần này được 
                cắt để vừa vặn thoải mái và bao gồm một dây thắt lưng đàn hồi và còng có khóa ở phía dưới. Logo Supreme màu trắng nằm dọc theo khe khóa 
                dán ở mỗi mắt cá chân và ống quần được hoàn thiện với một túi có khóa kéo ở phía sau.'
            ],
            [
                'typeID' => 6, 'brandID' => 3, 'productName' => 'Supreme Side Logo Track Pants', 'image' => 'SupremeSideLogoTrackPants.png',
                'price' => 7407000, 'topHot' => rand(0, 1),
                'detail' => 'Hãy xuống phố thật phong cách với chiếc quần thể thao có logo bên này. Logo của Supreme New York được in sang một bên chắc 
                chắn sẽ quay đầu. Đơn giản mà hiệu quả.'
            ],
            [
                'typeID' => 6, 'brandID' => 3, 'productName' => 'Supreme Logo Print Track Pants', 'image' => 'SupremeLogoPrintTrackPants.png',
                'price' => 12322000, 'topHot' => rand(0, 1),
                'detail' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Cập nhật tủ quần áo hàng ngày của bạn 
                trong mùa này với những chiếc quần thể thao in logo cotton màu đen này của hãng Supreme có chiều dài dài, cạp chun co giãn và hai túi phía trước.'
            ],
            [
                'typeID' => 6, 'brandID' => 3, 'productName' => 'Supreme x Nike Trail Running Trousers', 'image' => 'SupremexNikeTrailRunningTrousers.png',
                'price' => 7407000, 'topHot' => rand(0, 1),
                'detail' => 'Còn gì tốt hơn một thương hiệu thời trang dạo phố? Tại sao tất nhiên là một thương hiệu thời trang dạo phố hợp tác với gã 
                khổng lồ thể thao Nike. Lấy ví dụ như chiếc quần chạy bộ Nike Trail màu hồng này của Supreme. Chạy trên. Có dây thắt lưng co giãn, ống côn, 
                túi xẻ bên và chiều dài đều đặn.'
            ],
            [
                'typeID' => 6, 'brandID' => 3, 'productName' => 'Supreme Warm Up Track Pants', 'image' => 'SupremeWarmUpTrackPants.png',
                'price' => 5515000, 'topHot' => rand(0, 1),
                'detail' => 'You better Warm Up because once you put on these Supreme track pants you\'ll want to run a thousand miles just to show them off. 
                Và chúng tôi không thể đánh giá bạn. Chúng tôi có thể sẽ làm như vậy.'
            ],
            //Supreme -Quần jean(3-7)
            [
                'typeID' => 7, 'brandID' => 3, 'productName' => 'Louis Vuitton X Supreme Camo Jeans', 'image' => 'LouisVuittonXSupremeCamoJeans.png',
                'price' => 36850000, 'topHot' => rand(0, 1),
                'detail' => 'Quần jean camo Louis Vuitton X Supreme màu xanh lá cây của hãng cao cấp có dây thắt lưng với vòng đai, nút và khóa kéo, 
                thiết kế năm túi, chi tiết đinh tán tông màu vàng và in logo toàn bộ. Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết 
                các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo 
                tính xác thực -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 7, 'brandID' => 3, 'productName' => 'Supreme Stone Washed Slim Jeans Stone Washed Indigo', 'image' => 'SupremeStoneWashedSlimJeansStoneWashedIndigo.png',
                'price' => 4013000, 'topHot' => rand(0, 1),
                'detail' => 'Phong cách 5 túi cổ điển với nút bay, túi một đồng xu, đinh tán đồng và miếng dán logo bằng da ở mặt sau -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'typeID' => 7, 'brandID' => 3, 'productName' => 'Supreme Logo Stripe Jacquard Regular Jean Blue Hype Clothinga Thumbnail', 'image' => 'SupremeLogoStripJacquardRegularJeanBlueHypeClothingaThumbnail.jpg',
                'price' => 13950000, 'topHot' => rand(0, 1),
                'detail' => 'Sọc Logo Tối Cao Jacquard Jean Thường. The Supreme\'s Droplist được lặp lại trong cuộc hẹn thứ Năm thông thường, đánh dấu sự sụt giảm của tuần thứ 15. Được giới thiệu ở đây là một dòng quần jean denim vừa vặn thông thường với họa tiết Jacquard, một kỹ thuật khâu nối tiếp cho phép tạo ra các hình học phức tạp.'
            ],
            [
                'typeID' => 7, 'brandID' => 3, 'productName' => 'Supreme White Slim Jeans', 'image' => 'SupremeWhiteSlimJeans.jpg',
                'price' => 8071000, 'topHot' => rand(0, 1),
                'detail' => 'Phiên bản denim trắng của quần jean mỏng cứng cổ điển -- Miếng dán da màu tự nhiên với thương hiệu Supreme -- Sản xuất tại Mỹ'
            ],
            [
                'typeID' => 7, 'brandID' => 3, 'productName' => 'Supreme Waves Work Jeans Multicolor', 'image' => 'SupremeWavesWorkJeansMulticolor.jpg',
                'price' => 8902000, 'topHot' => rand(0, 1),
                'detail' => 'Phong cách 5 túi cổ điển với nút bấm, túi một đồng xu, đinh tán oxit đồng và miếng dán logo bằng da ở mặt sau.'
            ],
            //Supreme -Quần short(3-8)
            [
                'typeID' => 8, 'brandID' => 3, 'productName' => 'Supreme Straight-Leg Cargo Shorts', 'image' => 'SupremeStraight-LegCargoShorts.png',
                'price' => 4313000, 'topHot' => rand(0, 1),
                'detail' => 'Thời tiết trở nên ấm hơn? Những chiếc quần đùi hàng hiệu Supreme chân thẳng này sẽ là món đồ đầu tiên mà bạn muốn. Và ai có 
                thể đổ lỗi cho bạn? '
            ],
            [
                'typeID' => 8, 'brandID' => 3, 'productName' => 'Supreme Patchwork Pique Shorts', 'image' => 'SupremePatchworkPiqueShorts.jpg',
                'price' => 4313000, 'topHot' => rand(0, 1),
                'detail' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. 
                Tay phải màu đỏ, chân trái màu vàng. Với những chiếc quần short pique bằng vải cotton nhiều màu này từ Supreme, 
                bạn có thể thể hiện tình yêu của mình với trò chơi yêu thích thời thơ ấu của mình. Đừng để bị xoắn. Có phần nhô cao, 
                dây thắt lưng co giãn, túi bên, túi sau, thiết kế khối màu ốp và vừa vặn thoải mái.'
            ],
            [
                'typeID' => 8, 'brandID' => 3, 'productName' => 'Supreme Straight-leg Work Shorts', 'image' => 'SupremeStraight-legWorkShorts.png',
                'price' => 3713000, 'topHot' => rand(0, 1),
                'detail' => 'Thời tiết chuyển sang ấm hơn? Những chiếc quần đùi đi làm cho chân thẳng này là cặp đôi mà bạn sẽ đạt được. Logo hộp tối cao là chi tiết lý tưởng.'
            ],
            [
                'typeID' => 8, 'brandID' => 3, 'productName' => 'Supreme x Lacoste Logo Sweat Shorts', 'image' => 'SupremexLacosteLogoSweatshorts.png',
                'price' => 4912000, 'topHot' => rand(0, 1),
                'detail' => 'Ngay từ sự hợp tác giữa Lacoste và Supreme, những chiếc quần đùi thể thao có logo bằng cotton màu đen này sẽ là người bạn đồng hành 
                hoàn hảo cho dù bạn đang ở trên sân đấu hay trên ghế dài. Nhặt bóng rổ hay bỏng ngô, tùy bạn. Có dây thắt lưng đàn hồi, túi bên, túi vá phía sau, 
                chiều dài quá đầu gối và logo thêu ở bên cạnh.'
            ],
            [
                'typeID' => 8, 'brandID' => 3, 'productName' => 'Supreme Printed Shorts', 'image' => 'SupremePrintedShorts.png',
                'price' => 5512000, 'topHot' => rand(0, 1),
                'detail' => 'Quần short in nhiều màu của hãng Supreme có phần cạp ở giữa, cạp chun co giãn, túi sau, chiều dài ngắn và họa tiết hoa. 
                Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được 
                tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới.'
            ],
            //Supreme -mũ (3-9)
            [
                'typeID' => 9, 'brandID' => 3, 'productName' => 'Supreme Static Knitted Beanie Hat', 'image' => 'SupremeStaticKnittedBeanieHat.jpg',
                'price' => 1685000, 'topHot' => rand(0, 1),
                'detail' => 'Trượt lên một chút ấm áp. Được chế tác từ chất liệu dệt kim mềm mại, chiếc mũ len dệt kim tĩnh từ Supreme này được hoàn 
                thiện với logo thêu trên vành mũ để tạo thêm điểm nhấn. Các phụ kiện hoàn hảo.'
            ],
            [
                'typeID' => 9, 'brandID' => 3, 'productName' => 'Supreme Checkerboard Boucle Camp Cap SS19', 'image' => 'SupremeCheckerboardBoucleCampCapSS19.png',
                'price' => 2377000, 'topHot' => rand(0, 1),
                'detail' => 'Nếu bạn đi xuống rừng hôm nay, hãy chắc chắn rằng bạn được trang bị đầy đủ. Hôm nay là ngày bạn đi dã ngoại, vì vậy đừng để 
                bị bắt gặp nếu không có chăn hoặc thậm chí là chiếc mũ cắm trại màu đỏ và trắng pha trộn kẻ caro \'SS19\' của Supreme. Chỉ cần không bị lạc. Có vành cứng,
                 miếng dán logo phía trước, dây buộc có thể điều chỉnh được, họa tiết ca rô và vải tweed hoa văn.'
            ],
            [
                'typeID' => 9, 'brandID' => 3, 'productName' => 'Supreme Coated Linen Camp Cap', 'image' => 'SupremeCoatedLinenCampCap.jpg',
                'price' => 4315000, 'topHot' => rand(0, 1),
                'detail' => 'Đã đến lúc thay đổi phong cách của bạn. Tự hào với biểu tượng Supreme mang tính biểu tượng ở mặt trước, Mũ cắm trại bằng vải 
                lanh tráng màu đỏ này là phụ kiện duy nhất bạn cần'
            ],
            [
                'typeID' => 9, 'brandID' => 3, 'productName' => 'Supreme South 2 West 8 Jungle Hat Camo', 'image' => 'SupremeSOUTH2WEST8JungleHatCamo.jpg',
                'price' => 4267000, 'topHot' => rand(0, 1),
                'detail' => 'Vải cotton 3 lớp chống thấm nước với dây cotton đóng và nút da. Băng vải tiện ích xung quanh vành và logo in 3M Reflective. 
                Sản xuất dành riêng cho Tối cao.'
            ],
            [
                'typeID' => 9, 'brandID' => 3, 'productName' => 'Supreme Clayton Patterson/Supreme Skulls 5-Panel-White', 'image' => 'SupremeClaytonPattersonSupremeSkulls5PanelWhite.jpg',
                'price' => 3459000, 'topHot' => rand(0, 1),
                'detail' => 'Tất cả các loại mũ bằng vải cotton chino twill 5-Panel có chốt đóng. Hình thêu trên mặt trước, mặt bên, mặt sau và tấm che mặt. 
                Tác phẩm nghệ thuật gốc của Clayton Patterson.'
            ]
        ]);
        //Hermes
        DB::table('products')->insert([
            //Hermes  - Áo sơ mi (4-1)
            [
                'typeID' => 1, 'brandID' => 4, 'productName' => 'Hermes Micro Shirt', 'image' => 'HermesMicroShirt.jpg',
                'price' =>23651000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi vải cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu "Caleche" -- Cổ tay áo, cổ áo 
                trong và nút hướng ra ngoài được buộc chặt bằng nút ngọc trai -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 1, 'brandID' => 4, 'productName' => 'Hermes Shirt', 'image' => 'HermesShirt.jpg',
                'price' =>27112000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu "Caleche" -- Tay áo và chốt cài phía 
                trước được buộc chặt bằng các nút khảm xà cừ -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 1, 'brandID' => 4, 'productName' => 'Hermes Jacket Shirt With Swing Collar', 'image' => 'HermesJacketShirtWithSwingCollar.jpg',
                'price' =>25958000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác sơ mi tay ngắn bằng vải bông và in "Rayures rythmees fil a fil" với cổ bẻ và phần dưới có gân (100% cotton) -- 
                Sản xuất tại Pháp -- Chiều dài: 26,8 "| Kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước. '
            ],
            [
                'typeID' => 1, 'brandID' => 4, 'productName' => 'Hermes Polo Shirt With Striped Ribbon Detail', 'image' => 'HermesPoloShirtWithStripedRibbonDetail.jpg',
                'price' =>13614000, 'topHot' => rand(0, 1),
                'detail' => 'Áo sơ mi polo bằng vải cotton trơn với cổ áo thẳng linh hoạt và chi tiết ruy băng sọc (100% cotton) -- Sản xuất tại Pháp -- 
                Chiều dài: 29,1 "| Các kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước.'
            ],
            [
                'typeID' => 1, 'brandID' => 4, 'productName' => 'Hermes Competition Shirt', 'image' => 'HermesCompetitionShirt.jpg',
                'price' =>12229000, 'topHot' => rand(0, 1),
                'detail' => 'Áo dài tay thi đấu -- Cắt thẳng -- Vải mềm và thoáng khí -- Cổ áo và cổ tay áo bằng vải bông có nút đinh hình yên ngựa 
                "Hermes Sellier" -- (73% cotton, 24% polyamide, 3% elasthane)'
            ],
            //Hermes  - Áo thun (4-2)
            [
                'typeID' => 2, 'brandID' => 4, 'productName' => 'Hermes Micro Embroidered Pocket T-Shirt', 'image' => 'HermesMicroEmbroideredPocketT-Shirt.jpg',
                'price' =>11999000, 'topHot' => rand(0, 1),
                'detail' => 'Áo thun siêu nhỏ in áo thun cotton trơn (100% cotton) -- Cổ áo trang trí sườn -- Túi có thêu "Clochette" -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 2, 'brandID' => 4, 'productName' => 'Hermes Bicolor Jogging T-Shirt', 'image' => 'HermesBicolorJoggingTShirt.jpg',
                'price' =>10499000, 'topHot' => rand(0, 1),
                'detail' => 'Áo thun tay ngắn cổ thuyền chạy bộ bằng cotton với các chi tiết Toilovent trên vai và tay áo (100% cotton) -- Sản xuất tại Ý'
            ],
            [
                'typeID' => 2, 'brandID' => 4, 'productName' => 'Hermes Labyrinthe T-Shirt', 'image' => 'HermesLabyrintheT-Shirt.jpg',
                'price' =>27112000, 'topHot' => rand(0, 1),
                'detail' => ' Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in "Labyrinthe" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý'
            ],
            [
                'typeID' => 2, 'brandID' => 4, 'productName' => 'Herems Maillons T-Shirt', 'image' => 'HeremsMaillonsT-Shirt.jpg',
                'price' =>28265000, 'topHot' => rand(0, 1),
                'detail' => 'Áo thun cổ thuyền tay ngắn bằng vải jacquard, len crepe thập niên 120 và in "Maillons" với một sợi chỉ khổ 18 -- 
                Một minh họa trang nhã về các liên kết Chaine d\'Ancre mang tính biểu tượng (100% len) -- Sản xuất tại Ý '
            ],
            [
                'typeID' => 2, 'brandID' => 4, 'productName' => 'Hermes Rayures Mix And Match T-Shirt', 'image' => 'HermesRayuresMixAndMatchT-Shirt.jpg',
                'price' =>22382000, 'topHot' => rand(0, 1),
                'detail' => 'Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in "Rayures Mix and match" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý '
            ],
            //Hermes  - Áo khoát (4-3)
            [
                'typeID' => 3, 'brandID' => 4, 'productName' => 'Hermes Rayures Et Maillons Esquisses Straight Cut Jacket', 'image' => 'HermesRayuresEtMaillonsEsquissesStraightCutJacket.jpg',
                'price' =>72105000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác cắt thẳng bằng cotton và in "Rayures maillons esquisses" với cổ áo cài cúc, khóa kéo hai chiều và túi bên hông có cúc và khóa kéo (100% cotton) -- Sản xuất tại Pháp -- 
                Chiều dài lưng: 25,6 "| Kích thước được chỉ ra tương ứng với kích thước 48, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước. '
            ],
            [
                'typeID' => 3, 'brandID' => 4, 'productName' => 'Hermes Reversible Rib Trim Jacket', 'image' => 'HermesReversibleRibTrimJacket.jpg',
                'price' =>93448000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác có viền có thể đảo ngược bằng vải cotton, in chữ "Danse des chevaux" và Toilovent chống thấm nước với cổ áo và còng có 
                viền, túi hai bên có khóa kéo và zip (80% nylon và 20% elastane) -- Sản xuất tại Pháp -- Chiều dài lưng: 25,6 "| Kích thước được chỉ ra tương ứng 
                với kích thước 48, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước.'
            ],
            [
                'typeID' => 3, 'brandID' => 4, 'productName' => 'Hermes Doudoune Courte', 'image' => 'HermesDoudouneCourte.jpg',
                'price' =>145363000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác cưỡi ngựa bằng da hươu đã giặt (100% da hươu) -- Lớp lót với họa tiết "H passant" -- 
                Dây chuyền mạ palladium -- Buộc chặt túi bằng zip mạ palladium -- Chốt phía trước ở giữa với các nút mạ palladium khắc 
                "Clou de selle" và nút sừng phẳng -- Sản xuất tại Ý'
            ],
            [
                'typeID' => 3, 'brandID' => 4, 'productName' => 'Hermes Sartorial Jacket', 'image' => 'HermesSartorialJacket.jpg',
                'price' =>53069000, 'topHot' => rand(0, 1),
                'detail' => 'Áo khoác Sartorial vải lanh (100% vải lanh) -- Túi và lót túi phía trước bên trái bên trong bằng vải bông xương cá co giãn 
                -- Túi có đường ống -- Chốt phía trước với các nút mạ palladium tráng men và nút sừng phẳng'
            ],
            [
                'typeID' => 3, 'brandID' => 4, 'productName' => 'Hermes RayuresS erties 24 Twins Light Jacket', 'image' => 'HermesRayuresSerties24TwinsLightJacket.jpg',
                'price' =>65183000, 'topHot' => rand(0, 1),
                'detail' => 'Jacket in cotton and "Rayures serties" print with notched collar, 2 horn buttons, 2 mesh pockets, one front pocket and 
                contrasting fabric on the front closure (100% cotton) -- Made in Italy -- Back length: 30.3" | The dimensions indicated correspond to 
                a size 50, they may vary by +/- 0.4" depending on the size'
            ],
            //Hermes  - Dép (4-4)
            [
                'typeID' => 4, 'brandID' => 4, 'productName' => 'Hermes Oran Sandal White', 'image' => 'HermesOranSandalWhite.jpg',
                'price' =>14537000, 'topHot' => rand(0, 1),
                'detail' => 'Sandal in Box da bê với đường cắt chữ "H" mang tính biểu tượng -- Một phong cách mang tính biểu tượng của Hermes, 
                hình bóng này là một phần thiết yếu trong mọi tủ quần áo'
            ],
            [
                'typeID' => 4, 'brandID' => 4, 'productName' => 'Hermes Legend Sandal', 'image' => 'HermesLegendSandal.jpg',
                'price' =>19844000, 'topHot' => rand(0, 1),
                'detail' => 'Sandal cao gót bằng da bê với đường cắt chữ "H" mang tính biểu tượng và dây đeo mảnh ở mắt cá chân -- 
                Một phong cách mang tính biểu tượng của Hermes, hình bóng này là một phần thiết yếu trong mọi tủ quần áo'
            ],
            [
                'typeID' => 4, 'brandID' => 4, 'productName' => 'Hermes Santorini Sandal', 'image' => 'HermesSantoriniSandal.jpg',
                'price' =>18228000, 'topHot' => rand(0, 1),
                'detail' => 'Sandal da bê với chi tiết viền thô, chi tiết cắt chữ "H" và dây đeo mảnh ở mắt cá chân -- Một phong cách sang trọng 
                và giản dị hoàn hảo để sử dụng hàng ngày'
            ],
            [
                'typeID' => 4, 'brandID' => 4, 'productName' => 'Hermes Avenue Sandal', 'image' => 'HermesAvenueSandal.jpg',
                'price' =>24228000, 'topHot' => rand(0, 1),
                'detail' => 'Sandal bằng da bê với khóa Kelly mạ palladium mang tính biểu tượng --  Đối với sự thanh lịch hàng ngày'
            ],
            [
                'typeID' => 4, 'brandID' => 4, 'productName' => 'Hermes Premiere 70 Sandal', 'image' => 'HermesPremiere70Sandal.jpg',
                'price' =>27112000, 'topHot' => rand(0, 1),
                'detail' => 'Sandal mang tính biểu tượng bằng da lộn và sa tanh với các chi tiết pha lê và dây đeo mắt cá chân mỏng -- Sản xuất tại Ý'
            ],
            //Hermes  - Giày (4-5)
            [
                'typeID' => 5, 'brandID' => 4, 'productName' => 'Hermes Boomerang Sneaker', 'image' => 'HermesBoomerangSneaker.jpg',
                'price' =>20305000, 'topHot' => rand(0, 1),
                'detail' => 'Giày sneaker tối giản bằng da bê Epsom in với đế màu cam mang tính biểu tượng -- Một cái nhìn hiện đại và hợp thời trang -- 
                Sản xuất tại Ý'
            ],
            [
                'typeID' => 5, 'brandID' => 4, 'productName' => 'Hermes Crew Sneaker', 'image' => 'HermesCrewSneaker.jpg',
                'price' =>18228000, 'topHot' => rand(0, 1),
                'detail' => 'Giày thể thao bằng da dê đan và da lộn với đế cao su đặc trưng -- Một cái nhìn sang trọng và thể thao'
            ],
            [
                'typeID' => 5, 'brandID' => 4, 'productName' => 'Hermes Avantage Sneaker', 'image' => 'HermesAvantageSneaker.jpg',
                'price' =>18228000, 'topHot' => rand(0, 1),
                'detail' => 'Giày thể thao bằng da bê với họa tiết "H en Biais" tương phản -- Một thiết kế đồ họa và kiểu dáng đẹp -- Sản xuất tại Ý'
            ],
            [
                'typeID' => 5, 'brandID' => 4, 'productName' => 'Hermes Addict Sneaker', 'image' => 'HermesAddictSneaker.jpg',
                'price' =>19613000, 'topHot' => rand(0, 1),
                'detail' => 'Giày thể thao đan hai màu với ảo ảnh quang học -- Bản diễn giải lại phong cách cổ điển -- Sản xuất tại Ý'
            ],
            [
                'typeID' => 5, 'brandID' => 4, 'productName' => 'Hermes Alessandro Loafer', 'image' => 'HermesAlessandroLoafer.jpg',
                'price' =>20305000, 'topHot' => rand(0, 1),
                'detail' => 'Giày lười lái xe bằng da bò lộn với dây da bện và khóa "Chaine d\'Ancre" -- Một chiếc giày lười kiểu hải lý lý tưởng cho đất liền 
                hoặc biển'
            ],
            //Hermes  - Quần dài (4-6)
            [
                'typeID' => 6, 'brandID' => 4, 'productName' => 'Hermes Esprit Jogging H Pants', 'image' => 'HermesEspritJoggingHPants.jpg',
                'price' =>27689000, 'topHot' => rand(0, 1),
                'detail' => 'Quần chạy bộ Esprit chất liệu len "Maille Voyage" với họa tiết chữ "H" trơn (len nguyên chất 100%) -- 
                Thắt lưng và mắt cá chân có viền gân -- Thắt lưng có dây rút bằng len với các chi tiết chạm khắc mạ palladium'
            ],
            [
                'typeID' => 6, 'brandID' => 4, 'productName' => 'Hermes Chino Pants', 'image' => 'HermesChinoPants.jpg',
                'price' =>33457000, 'topHot' => rand(0, 1),
                'detail' => 'Quần ống loe chất liệu cotton co giãn kép (96% cotton, 4% elastane) -- 
                Túi, lót trước và sau bằng bông xương cá co giãn -- Thắt lưng bên trong bằng nút sừng -- 
                Chốt phía trước bằng zip mạ palladium -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 6, 'brandID' => 4, 'productName' => 'Hermes Carrot Pants', 'image' => 'HermesCarrotPants.jpg',
                'price' =>39225000, 'topHot' => rand(0, 1),
                'detail' => 'Quần cà rốt lưng cao bằng len nhiệt đới (len nguyên chất 100%) -- Chốt mặt trước bằng nút còi 
                -- Chốt lưng bằng khóa mạ palladium -- Sản xuất tại Pháp'
            ],
            [
                'typeID' => 6, 'brandID' => 4, 'productName' => 'Hermes Saint Germain Fitted Pants', 'image' => 'HermesSaintGermainFittedPants.jpg',
                'price' =>14537000, 'topHot' => rand(0, 1),
                'detail' => 'Quần được may bằng vải chéo cotton co giãn (97% cotton và 3% elastane) -- Sản xuất tại Ý -- Độ mở của chân: 7,5 
                "| Các kích thước được chỉ ra tương ứng với cỡ 42, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước'
            ],
            [
                'typeID' => 6, 'brandID' => 4, 'productName' => 'Hermes Poste Et Cavalerie-Jogging Pants', 'image' => 'HermesPosteEtCavalerie-JoggingPants.jpg',
                'price' =>25381000, 'topHot' => rand(0, 1),
                'detail' => 'Quần chạy bộ bằng vải thô in "Poste et Cavalerie" (100% cotton) -- Túi trong áo bông -- Dây thắt lưng trang trí sườn -- Dây thắt lưng có dây bện -- 
                Dây có chi tiết mạ palladium -- Sản xuất tại Pháp'
            ],
        ]);
    }
}
