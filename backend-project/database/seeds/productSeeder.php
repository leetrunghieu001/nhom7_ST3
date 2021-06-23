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
        DB::table('tbl_product')->insert([
            //Adidas - Áo sơ mi
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo Sơ Mi Nam Trắng Adidas GS120', 'product_image' => 'Áo-Sơ-Mi-Nam-Trắng-Adidas-bodz-1.jpg',
                'product_price' => 210000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính'
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo Sơ mi Adidas SM-224', 'product_image' => 'agFWIkQl.jpg',
                'product_price' => 200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo Sơ Mi Nam Trắng Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính '
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'ÁO SƠ MI NAM THỜI TRANG CAO CẤP ADIDAS', 'product_image' => '46b432b98161d3ec905b1710cf8a8e34.jpg',
                'product_price' => 130000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo Sơ Mi Nam Adidas với thiết kế thanh lịch, trẻ trung và đậm chất nam tính, phù hợp cho sinh viên'
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'ÁO SƠ MI TRẮNG ADIDAS ASM658', 'product_image' => 'ao-so-mi-trang-adidas-asm658-4839-slide-1.jpg',
                'product_price' => 185000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Phong cách Hàn Quốc ôm body, in logo Adidas với thiết kế thanh lịch, ba nút ngang ở cổ áo tạo sự trẻ trung và đậm chất nam tính. Chất liệu thông thoáng'
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo sơ mi adidas', 'product_image' => '22448570_1678034495602399_2960329806400078310_n.jpg',
                'product_price' => 260000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Vải kate lụa co giãn nhẹ, màu sắc có thể hơi khác do ánh sáng'
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo sơ mi adidas SB135', 'product_image' => '41575497_2048526202127012_1411856480063193088_n.jpg',
                'product_price' => 250000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng. '
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo sơ mi adidas SB140', 'product_image' => '41462116_2048526212127011_6155881302852632576_n.png',
                'product_price' => 250000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.'
            ],
            [
                'category_id' => 1, 'brand_id' => 1, 'product_name' => 'Áo sơ mi adidas SB139', 'product_image' => '41527296_2048526198793679_7924116083030622208_n.png',
                'product_price' => 250000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chuẩn soái ca sơ mi trắng luôn ạ, sơ mi trắng tay dài cổ bẻ in sọc ngang ngực trẻ trung và thanh lịch vô cùng.'
            ],
            //Adidas - Áo phông (Áo thun)
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'WXE TEE AOP', 'product_image' => 'WxE_Tee_AOP_Nhieu_mau_H43944_21_model.jpg',
                'product_price' => 700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'No returns, no refunds Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp 
             pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào. Giới hạn số lượng 1 sản phẩm 
             trên mỗi đơn hàng.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'LINEAR LOGO TEE', 'product_image' => 'LINEAR_LOGO_TEE_Ngoc_lam_HB1818_21_model.jpg',
                'product_price' => 700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo phong thiết kế thoáng mát, nhẹ nhàng'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'LINEAR REPEAT', 'product_image' => 'LINEAR_REPEAT_Mau_xanh_da_troi_GN7128_21_model.jpg',
                'product_price' => 700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo phong xanh đậm thiết kế đơn giản, nhẹ nhàng'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN GRAPHIC SPRT', 'product_image' => 'Ao_thun_graphic_SPRT_trang_GN2428_21_model.jpg',
                'product_price' => 850000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dấu ấn lịch sử của adidas trải dài biết bao lĩnh vực, bao thế hệ và vượt xa mọi kỳ vọng. Không giới hạn. 
             Hãy mang trọn tâm thế ấy khi diện chiếc áo thun này. Chính xác là hãy luôn mang trọn tâm thế ấy, 
             nhưng logo adidas hiện diện như lời nhắc nếu bạn cần. Nếu không, bạn sẽ đơn giản là tận hưởng cảm giác dễ chịu đến từ chất vải cotton 
             mềm mại. Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng 
             tới chấm dứt rác thải nhựa.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN GRAPHIC ICONS PRIMEBLUE FOR THE OCEANS', 'product_image' => 'Ao_Thun_Graphic_Icons_Primeblue_For_The_Oceans_DJen_GL3263_21_model.jpg',
                'product_price' => 480000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO THUN GRAPHIC LÀM TỪ CHẤT LIỆU TÁI CHẾ. Tái chế thật phong cách. Chiếc áo thun ngắn tay adidas này mang họa tiết 
             graphic "Reduce and Reuse" cỡ lớn trước ngực. Sắc màu táo bạo cho bạn vẻ ngoài đầy nổi bật. Sản phẩm này may bằng vải công nghệ 
             Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN 3 SỌC SPRT', 'product_image' => 'Ao_thun_3_Soc_SPRT_trang_GN2418_21_model.jpg',
                'product_price' => 850000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO THUN COTTON MỀM MẠI VỚI THIẾT KẾ TỐI GIẢN. Đơn điệu? Không hề. Nâng tầm outfit adidas của bạn với chiếc áo thun 
             SPRT này. Thêm phần phong cách với thiết kế viền 3 Sọc và logo Ba Lá thêu nổi. Vì nhàm chán không phải là tính cách của bạn. 
             Các sản phẩm cotton của chúng tôi giúp hỗ trợ ngành trồng bông bền vững. Sản phẩm này thể hiện mong muốn của chúng tôi hướng tới 
             chấm dứt rác thải nhựa.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN GRAPHIC RUN FOR THE OCEANS', 'product_image' => 'Ao_thun_graphic_Run_for_the_Oceans_Be_GJ6456_21_model.jpg',
                'product_price' => 550000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO THUN CHẠY BỘ VÌ TƯƠNG LAI ĐẠI DƯƠNG XANH. Bất kể trên hè phố, đường mòn hay sân vận động, bộ môn chạy bộ đều kết nối bạn với mặt đất. 
             Hãy chung tay cùng adidas quyết tâm bảo vệ Trái Đất. Là một bước tiến nhỏ góp phần chấm dứt rác thải nhựa, chiếc áo thun chạy bộ này làm từ chất liệu tái 
             chế. Áo giúp bạn luôn khô ráo nhờ công nghệ AEROREADY thấm hút ẩm. Sản phẩm này may bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có 
             sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN CHẠY BỘ HEAT.RDY', 'product_image' => 'Ao_Thun_Chay_Bo_HEAT.RDY_trai_cam_GM1544_21_model.jpg',
                'product_price' => 1100000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Đánh bay mồ hôi nhễ nhại và chấm dứt vấn nạn rác thải nhựa. Chiếc áo thun chạy bộ này làm từ chất liệu tái chế, là một phần cam kết của adidas 
            hướng tới chấm dứt rác thải nhựa. Chất vải công nghệ HEAT.RDY cho bạn cảm giác mềm mại, siêu nhẹ trên da. Và cả cảm giác tạo ra sự khác biệt. 
            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN FORUM ', 'product_image' => 'áo-thun-forum.jpg',
                'product_price' => 700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ÁO THUN FORUM'
            ],
            [
                'category_id' => 2, 'brand_id' => 1, 'product_name' => 'ÁO THUN GRAPHIC PHỦ HỌA TIẾT', 'product_image' => 'Ao_Thun_Graphic_Phu_Hoa_Tiet_trang_GP0884_21_model.jpg',
                'product_price' => 1100000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO THUN CỔ TRÒN IN HỌA TIẾT RẰN RI. Đôi khi trang phục rằn ri giúp bạn nổi bật chứ không phải để ẩn mình. Với những nét cọ mạnh mẽ, 
            chiếc áo thun adidas này biến tấu họa tiết rằn ri theo hướng hội họa. Chất vải jersey cotton mềm mại chính là tấm toan vẽ. 
            Các sản phẩm cotton của chúng tôi hỗ trợ ngành trồng bông bền vững. Đây là một phần cam kết của chúng tôi hướng tới chấm dứt rác thải nhựa.'
            ],
            //Adidas - Áo khoác
            [
                'category_id' => 3, 'brand_id' => 1, 'product_name' => 'ÁO GIÓ R.Y.V.', 'product_image' => 'Ao_gio_R.Y.V._nau_GD9300_21_model.jpg',
                'product_price' => 2200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ÁO KHOÁC SIÊU NHẸ GIÚP BẠN LÊN ĐỒ PHÚT CHÓT. Sải bước mạnh mẽ. Lan tỏa tuyên ngôn. Tự tin thể hiện cá tính. Khi có cả một ngày dài bận rộn phía trước,
             đừng quên mang theo chiếc áo gió adidas này để bạn luôn sành điệu và thoải mái.'
            ],
            [
                'category_id' => 3, 'brand_id' => 1, 'product_name' => 'ÁO GIÓ ADIDAS PT3 KARKAJ', 'product_image' => 'áo-gió-adidas-pt3-karkaj.jpg',
                'product_price' => 1900000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'No description'
            ],
            [
                'category_id' => 3, 'brand_id' => 1, 'product_name' => 'ÁO KHOÁC GIÓ NGẮN TAY', 'product_image' => 'Ao_khoac_gio_ngan_tay_DJen_GM0084_21_model.jpg',
                'product_price' => 1700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO GIÓ CHƠI GOLF CHE CHẮN CHO BẠN TRONG ĐIỀU KIỆN THỜI TIẾT THẤT THƯỜNG. Điều kiện thời tiết thay đổi đòi hỏi sự linh hoạt trong thi đấu.
             Chiếc áo gió chơi golf adidas này sẽ đồng hành cùng bạn khi thời tiết thất thường. Cổ đứng và khóa kéo lửng giúp bạn tùy chỉnh độ che chắn. Chất vải chắn
              gió giúp bảo vệ bạn khi trời trở gió. Chất liệu mềm mại, thoáng khí và co giãn bốn chiều cho khả năng vận động không giới hạn. Sản phẩm này may bằng vải 
              công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao'
            ],
            [
                'category_id' => 3, 'brand_id' => 1, 'product_name' => 'ÁO GIÓ ADICOLOR FTO', 'product_image' => 'Ao_Gio_Adicolor_FTO_DJo_GN3561_21_model.jpg',
                'product_price' => 2700000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO GIÓ ADIDAS ADICOLOR MANG HƠI HƯỚNG RETRO. Ghi điểm với phong cách 3 Sọc. Không ngừng nghỉ. Xuống phố đầy phong cách bất chấp mọi thời
             tiết với chiếc áo gió này. Thiết kế ba màu đậm chất hoài niệm mang đến cho bạn phong cách thể thao retro. Trời trở gió ư? Chuyện nhỏ.Mẫu áo gió này may
             bằng vải công nghệ Primeblue, chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            [
                'category_id' => 3, 'brand_id' => 1, 'product_name' => 'ÁO KHOÁC CHẠY BỘ HALF-ZIP PRIMEBLUE', 'product_image' => 'Ao_Khoac_Chay_Bo_Half-Zip_Primeblue_trang_GP6487_21_model.jpg',
                'product_price' => 1400000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC ÁO KHOÁC CHẠY BỘ ẤM ÁP CÓ TÚI. Đừng để trời lạnh làm bạn nhụt chí. Hãy ra đường chạy bộ với cảm giác ấm áp dễ chịu đến từ chiếc áo khoác chạy bộ adidas này. 
            Các chi tiết tinh tế như khóa kéo lửng và lỗ xỏ ngón cái giúp bạn điều chỉnh độ che chắn tùy ý. Túi khóa kéo trước ngực đựng điện thoại khi bạn mu ốn đếm bước chân. 
            Chiếc áo khoác này làm từ chất liệu tái chế thân thiện với Trái Đất, cũng chính là nơi chúng ta chạy bộ.Sản phẩm này may bằng vải công nghệ Primeblue, 
            chất liệu tái chế hiệu năng cao có sử dụng sợi Parley Ocean Plastic.'
            ],
            //Adidas - Dép
            [
                'category_id' => 4, 'brand_id' => 1, 'product_name' => 'SANDAL ADILETTE COMFORT', 'product_image' => 'Sandal_Adilette_Comfort_DJen_FZ1750.jpg',
                'product_price' => 800000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ĐÔI DÉP PHONG CÁCH GIÚP BẠN THOẢI MÁI MỖI NGÀY. Trước hết để bàn chân chìm vào thoải mái. Với thiết kế cổ điển, đôi dép adidas này chính là 
            thực thể cô đọng tính đa năng và cảm giác thoải mái. Thân dép có đường viền ôm chân giúp nâng đỡ êm ái cho bạn cả ngày dễ chịu. Thân dép quai ngang đầy 
            phong cách tự hào thương hiệu adidas.'
            ],
            [
                'category_id' => 4, 'brand_id' => 1, 'product_name' => 'DÉP ĐẾ BẦN ADILETTE', 'product_image' => 'Dep_DJe_Ban_adilette_trang_GZ1025.jpg',
                'product_price' => 1500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ĐẮM MÌNH TRONG KHUNG CẢNH BIỂN XANH CÁT TRẮNG KHI MANG ĐÔI DÉP ADILETTE NÀY. Hòa mình vào xung quanh hoặc tự tạo nên khung cảnh. 
            Thật dễ dàng với họa tiết đại dương mơ màng trên phần quai bằng da mượt mà của đôi dép adidas adilette này. 
            Nếu vẫn chưa nghe thấy tiếng sóng biển thì bạn cũng sắp tới nơi rồi. Đôi dép này sẽ giúp bạn luôn thoải mái suốt dọc đường.'
            ],
            [
                'category_id' => 4, 'brand_id' => 1, 'product_name' => 'DÉP XỎ NGÓN EEZAY FLIP-FLOPS', 'product_image' => 'Dep_xo_ngon_Eezay_Flip-Flops_Hong_FY8112.jpg',
                'product_price' => 500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ĐÔI XĂNG ĐAN DÀNH CHO VIỆC DẠO CHƠI TRÊN BIỂN VỚI LỚP ĐỆM SIÊU NHẸ. Một thiết kế kinh điển mang lại sự thoải mái hàng ngày. 
            Đôi dép xỏ ngón nhẹ này thật tiện để tháo và xỏ khi ở trên bãi biển. Được thiết kế với lớp đệm tăng cường, đôi giày mang lại cho người đi cảm giác nhẹ nhàng, 
            êm ái.'
            ],
            [
                'category_id' => 4, 'brand_id' => 1, 'product_name' => 'DÉP NHÀ TẮM ADILETTE', 'product_image' => 'Dep_nha_tam_Adilette_DJen_FZ1716.jpg',
                'product_price' => 480000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'DÉP QUAI NGANG LÓT ĐỆM CHO BÉ CẢM GIÁC THOẢI MÁI SAU GIỜ BƠI. Nuông chiều đôi chân bé khi ra khỏi bể bơi với đôi dép trẻ em thoải mái này. Nhanh khô và mềm mại, 
            đôi dép này nâng niu bàn chân bé với lớp đệm siêu nhẹ. Biểu tượng adidas cỡ lớn táo bạo cho vẻ ngoài kinh điển.'
            ],
            [
                'category_id' => 4, 'brand_id' => 1, 'product_name' => 'DÉP ADILETTE COMFORT', 'product_image' => 'Dep_adilette_Comfort_DJen_FZ1701.jpg',
                'product_price' => 800000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'ĐÔI DÉP THOẢI MÁI PHÙ HỢP CẢ TRONG VÀ NGOÀI PHÒNG GYM. Đôi dép adidas này đẹp đến mức bạn sẽ muốn đi suốt cả ngày chứ không chỉ trong phòng thay đồ. Dép cho cảm giác 
            siêu thoải mái nhờ lòng dép ôm chân và quai ngang mềm dẻo dễ chịu mà cố định bàn chân chắc chắn. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất 
            liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.'
            ],
            //Adidas - Giày
            [
                'category_id' => 5, 'brand_id' => 1, 'product_name' => 'Giày Sneaker Nam Adidas ZX 2K 4D FW2002 “Cloud White”', 'product_image' => 'zx-2k-4d-shoes-white-fw2002-01-standard.jpg',
                'product_price' => 6000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Hàng nghìn vận động viên. Nhiều năm trời thu thập dữ liệu. adidas 4D chính là công nghệ cho tương lai. Đế giữa in kỹ thuật số không chỉ mang 
            vẻ ngoài tân tiến, từng mảng lưới làm bằng nhựa lỏng cho cảm giác độc đáo dưới chân. Phom giày được chế tác bằng ánh sáng và hoàn thiện bằng nhiệt. 
            Tất cả tạo nên một đôi giày chạy bộ với thiết kế riêng thúc đẩy bạn tiến lên phía trước. Phiên bản đường phố này có phom dáng tối ưu, bề mặt sần và màu sắc 
            neon vui mắt, gợi nhớ đến dòng giày ZX lần đầu ra mắt vào thập niên 80.'
            ],
            [
                'category_id' => 5, 'brand_id' => 1, 'product_name' => 'Giày Sneaker Nam Adidas Ultraboost 20 City Pack FX7815 “Osaka”', 'product_image' => 'ultraboost-20-city-pack-hype-djen-fx7815-01-standard.jpg',
                'product_price' => 5000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày Adidas Ultraboost 20 FX7815 hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. 
            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải 
            mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi'
            ],
            [
                'category_id' => 5, 'brand_id' => 1, 'product_name' => 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FU9993 “5th Anniversary”', 'product_image' => 'ultraboost-dna-shoes-black-fu9993-01-standard.jpg',
                'product_price' => 5000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. 
            Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. 
            Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy 
            mãi mãi.'
            ],
            [
                'category_id' => 5, 'brand_id' => 1, 'product_name' => 'Giày Sneaker Nam Adidas Ultraboost 4.0 DNA FW4898 “Grey Silver”', 'product_image' => 'ultraboost-dna-shoes-grey-fw4898-01-standard.jpg',
                'product_price' => 5000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong trợ 
            lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn 
            hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.'
            ],
            [
                'category_id' => 5, 'brand_id' => 1, 'product_name' => 'Giày Sneaker Nam Adidas X9000L3 EH0047 ”Core Black”', 'product_image' => 'x9000l3-shoes-black-eh0047-01-standard.jpg',
                'product_price' => 5000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong 
            trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. 
            Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.'
            ],
            //Adidas -Quần dài
            [
                'category_id' => 6, 'brand_id' => 1, 'product_name' => 'QUẦN THỂ THAO VẢI DỆT LOGO BA LÁ LỚN TRỪU TƯỢNG', 'product_image' => 'Quan_the_thao_vai_det_logo_Ba_La_lon_truu_tuong_DJen_GE0831_21_model.jpg',
                'product_price' => 1800000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'QUẦN THỂ THAO VỚI LOGO BA LÁ TRONG DIỆN MẠO MỚI. Bạn những tưởng logo Ba Lá chỉ có kích thước nhỏ? Không hẳn. Chiếc quần thể thao adidas này tự hào khoe logo trứ danh 
            đầy nổi bật. Để bạn luôn tự tin, táo bạo và sẵn sàng xuống phố'
            ],
            [
                'category_id' => 6, 'brand_id' => 1, 'product_name' => 'QUẦN THỂ THAO 3 SỌC BA LÁ 3D', 'product_image' => 'Quan_the_thao_3_Soc_Ba_La_3D_Mau_vang_GE0845_21_model.jpg',
                'product_price' => 1800000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'QUẦN THỂ THAO MẶC HÀNG NGÀY TÔN VINH BIỂU TƯỢNG 3 SỌC. Bạn đang lên đồ? Đừng căng thẳng. 
            Khỏi cần đau đầu khi đã có chiếc quần thể thao adidas này. 
            Ban đầu vốn được thiết kế cho cảm giác thoải mái bên ngoài sân đấu, 
            trang phục này đã lấn sân mạnh mẽ kể từ thập niên 70. Trên sân khấu. Trong đám đông. 
            Trên đường phố. Chắc chắn bạn sẽ bắt gặp hình bóng của phong cách đầy biểu tượng này mỗi ngày. 
            Nhưng bạn vẫn có thể tạo nên chất riêng của mình. Vì bất kể bạn mặc gì, đó chính là cá tính của bạn.'
            ],
            [
                'category_id' => 6, 'brand_id' => 1, 'product_name' => 'TRACK PANTS VẢI DỆT SPRT SUPERSPORT', 'product_image' => 'Track_Pants_Vai_Det_SPRT_SuperSport_DJen_GN2462_21_model.jpg',
                'product_price' => 2200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC QUẦN TRACK PANTS TÔN VINH DI SẢN THỂ THAO CÙNG NÉT BIẾN TẤU MỚI MẺ. Thì ra bạn hoàn toàn có thể mặc theo mọi phong cách. 
            Ít nhất là với chiếc quần track pants adidas này. Quần vừa thoải mái như đồ mặc nhà lại vừa chất chơi khi diện ra đường. Chẳng cần thay đồ khi hội bạn nổi 
            hứng hẹn nhau đi chơi. Bởi bạn vốn đã sẵn sàng cho ngày mới năng động. Hoặc lười biếng. Sản phẩm này có sử dụng chất liệu tái chế, là một phần cam kết của 
            chúng tôi hướng tới chấm dứt rác thải nhựa.'
            ],
            [
                'category_id' => 6, 'brand_id' => 1, 'product_name' => 'QUẦN NỈ R.Y.V.', 'product_image' => 'Quan_ni_R.Y.V._Xam_FM2239_21_model.jpg',
                'product_price' => 1800000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'QUẦN ADIDAS MANG PHONG CÁCH THỜI TRANG ĐƯỜNG PHỐ ĐẬM CHẤT THƯƠNG HIỆU. Mỗi chi tiết, thói quen hay tính cách đều làm nên con người bạn. 
            Bạn có thể chọn phong cách tinh tế hoặc táo bạo. Nhưng đó vẫn luôn là bạn. Cơ hội mới để bộc lộ bản thân. Tinh thần chính của bộ sưu tập adidas Reveal 
            Your Voice là tiên phong mở đường và kiến tạo xu hướng của riêng bạn. Chiếc quần nỉ R.Y.V. này khoe những mảng nylon màu sắc táo bạo cho vẻ ngoài thu hút mọi 
            ánh nhìn.'
            ],
            [
                'category_id' => 6, 'brand_id' => 1, 'product_name' => 'TRACK PANTS TRICOLOR ADICOLOR', 'product_image' => 'Track_pants_Tricolor_Adicolor_Bac_GN4213_21_model.jpg',
                'product_price' => 2200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'TRACK PANTS ADICOLOR ÁNH KIM THÊU LOGO BA LÁ. Không thể nhầm lẫn. Diện lên mình phong cách adidas hoàn toàn mới mẻ với chiếc track pants này. 
            Chất liệu màng bạch kim tạo hiệu ứng như phủ lớp bạc lóng lánh. Nếu chừng đó vẫn chưa đủ nổi bật, các logo Ba Lá thêu nổi sẽ giúp bạn nâng tầm phong cách. 
            Tự tin chinh phục ngày mới. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            //Adidas -Quần short
            [
                'category_id' => 8, 'brand_id' => 1, 'product_name' => 'QUẦN SHORT 3 SỌC KẺ', 'product_image' => 'Quan_short_3_Soc_Ke_DJen_DH5798_21_model.jpg',
                'product_price' => 1200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'MẪU QUẦN SHORT VỚI PHONG CÁCH 3 SỌC KẺ VƯỢT THỜI GIAN. Mẫu quần short này tôn vinh phong cách adidas đích thực. 
            Quần may bằng vải thun vảy cá mềm mại cho cảm giác dễ chịu. Bộ sưu tập Adicolor. Lấy cảm hứng từ di sản của adidas, Adicolor hiện đại mà đậm chất adidas. 
            Các chi tiết mang tính biểu tượng.3 Sọc Kẻ đặc trưng và logo thêu Bông Hoa Ba Cánh khoe niềm tự hào adidas'
            ],
            [
                'category_id' => 8, 'brand_id' => 1, 'product_name' => 'Quần short thể thao nam Adidas - DU1577', 'product_image' => 'untitled1_92e9c598afcc4256826610bb88d9f238_small.jpg',
                'product_price' => 550000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chiếc quần short tập luyện này giúp cho bạn khô ráo khi tăng cường độ tập luyện squat và đạp đùi. Chất vải siêu nhẹ giúp rũ sạch mồ hôi trên da bạn. 
            Miếng can bằng vải lưới mang lại khả năng thông khí có định hướng trong khi tập luyện.'
            ],
            [
                'category_id' => 8, 'brand_id' => 1, 'product_name' => 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143', 'product_image' => '6545908bf049b6d00aecf52e56ac7fd1.jpg',
                'product_price' => 600000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần short thể thao Nam Adidas ID Stadium Sho - DU1143 được sử dụng công nghệ hiện đại vào các sản phẩm quần áo để tăng cường sự lưu thông nhiệt 
            và độ ẩm cho người sử dụng suốt một ngày dài hoạt động. Thiết kế thời trang, năng động là sự kết hợp công nghệ của Adidas tạo sự thoải mái, uyển chuyển cho 
            người mặc. Màu sắc trang nhã, phong cách hiện đại sẽ góp phần khẳng định phong cách thời trang của bạn. Thiết kế trẻ trung năng động, dễ dàng mix đồ tao nên 
            phong cách thời trang cá tính riên bạn.'
            ],
            [
                'category_id' => 8, 'brand_id' => 1, 'product_name' => 'Adidas - Quần ngắn Nam 4K 3S+ Short Core Sport SS20-FJ72', 'product_image' => '14_4c5976ee30bf49a28a48189113677c1d_master.jpg',
                'product_price' => 1500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Bạn không thể kiểm soát nhiệt độ. Nhưng bạn có thể kiểm soát mức độ thoải mái của bạn. Trải nhiệm với áo thun tập luyện Adidas này để luyện tập 
            trong những đợt nắng nóng. Chất vải nhẹ giúp làm mát, giữ cho bạn khô ráo và cho bạn hoàn toàn tự do di chuyển. Kiểu dáng đẹp và kỹ thuật khâu cao cấp với 
            đường khâu zigzag bền và kết thúc liên kết mịn.'
            ],
            [
                'category_id' => 8, 'brand_id' => 1, 'product_name' => 'QUẦN SHORT KẺ SỌC NHỎ ULTIMATE365 CLUB', 'product_image' => 'Quan_short_ke_soc_nho_Ultimate365_Club_DJen_FJ9866_21_model.jpg',
                'product_price' => 1795000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'QUẦN SHORT CHƠI GOLF CHO CHUYỂN ĐỘNG DỄ DÀNG. Bỏ lại sau lưng tuần làm việc căng thẳng. Tập trung vào cú vung gậy với chiếc quần short chơi 
            golf adidas Ultimate365. Bạn sẽ có nhiều không gian để cử động cùng độ co giãn dễ chịu cho cảm giác thư thái và động tác đưa gậy theo bóng tự nhiên. 
            Hôm nào cũng là một ngày tuyệt vời để chơi golf.'
            ],
            //Adidas - Nón
            [
                'category_id' => 9, 'brand_id' => 1, 'product_name' => 'MŨ BÓNG CHÀY THÊU NỔI SIÊU NHẸ', 'product_image' => 'Mu_bong_chay_theu_noi_sieu_nhe_DJen_GM4509_01_standard.jpg',
                'product_price' => 380000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC MŨ LƯỠI TRAI TÙY CHỈNH LÀM TỪ CHẤT LIỆU TÁI CHẾ. Hãy đội chiếc mũ adidas này trước khi ra đường. 
            Mũ có chỉ số chống tia UV 50 giúp che chắn cho bạn khi tập luyện hay dạo phố. Chất vải siêu nhẹ và mượt mà trên da. 
            Điều chỉnh quai mũ phía sau cho độ vừa vặn phù hợp. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'category_id' => 9, 'brand_id' => 1, 'product_name' => 'MŨ BÓNG CHÀY 3 SỌC AEROREADY', 'product_image' => 'Mu_Bong_Chay_3_Soc_AEROREADY_DJen_GM6278_01_standard.jpg',
                'product_price' => 430000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC MŨ LƯỠI TRAI CLASSIC CHE NẮNG CHO BẠN. Đêm nóng, kem lạnh và mũ bóng chày. Mùa hè đến rồi. Hãy đi luyện ném bóng với chiếc mũ adidas này. 
            Công nghệ AEROREADY đánh bay mồ hôi và giúp bạn luôn thoáng mát trên sân tập. Vành cong che nắng cho mắt cùng 3 Sọc thể hiện tinh thần thể thao trong bạn. 
            Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao.'
            ],
            [
                'category_id' => 9, 'brand_id' => 1, 'product_name' => 'MŨ PERFORMANCE', 'product_image' => 'Mu_Performance_DJen_FI3092_01_standard.jpg',
                'product_price' => 525000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'MŨ CHƠI GOLF CO GIÃN TÍCH HỢP KHẢ NĂNG KHÁNG TIA UV. Duy trì sự tập trung trên sân golf trong những ngày ẩm ướt. Chiếc mũ chơi golf adidas này cho độ 
            che chắn vượt trội suốt những vòng golf ngập nắng. Kiếm tìm cảm giác vừa vặn tuyệt đối cho riêng bạn để chinh phục 18 lỗ golf.'
            ],
            [
                'category_id' => 9, 'brand_id' => 1, 'product_name' => 'MŨ DAD CAP', 'product_image' => 'Mu_Dad_Cap_DJen_FK3189_01_standard.jpg',
                'product_price' => 400000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'MŨ VẢI TWILL MỀM MẠI VỚI KIỂU DÁNG VÀ CẢM GIÁC THOẢI MÁI, ÍT ĐỊNH HÌNH HƠN. Thư giãn với phong cách phóng khoáng và xu hướng thoải mái. 
            Chiếc mũ adidas Dad Cap mang đến phong cách thường ngày với kiểu dáng và cảm giác mềm mại. Vành mũ cong sẵn tạo ấn tượng như một món phụ kiện được yêu thích từ 
            lâu ngay từ lần đội đầu tiên.'
            ],
            [
                'category_id' => 9, 'brand_id' => 1, 'product_name' => 'MŨ BUCKET BA LÁ', 'product_image' => 'Mu_bucket_Ba_La_DJen_AJ8995_01_standard.jpg',
                'product_price' => 600000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'CHIẾC MŨ PHONG CÁCH MÙA HÈ ĐẦY CÁ TÍNH. Khoe phong cách mùa hè của bạn với chiếc mũ bucket Core. Với chất vải twill cotton mềm mại và thoáng khí, 
            chiếc mũ này có thêu logo Ba Lá ở mặt trước tạo điểm nhấn phong cách.'
            ]
        ]);
        //Gucci
        DB::table('tbl_product')->insert([
            //Gucci - Áo sơ mi (2-1)
            [
                'category_id' => 1, 'brand_id' => 2, 'product_name' => 'Áo sơ mi tay dài thời trang nam', 'product_image' => '73ea5145066e70452a1363afedd8eafa.jpg',
                'product_price' => 230000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi tay dài thời trang nam họa tiết Gucci - Chất liệu: kate lụa - Hàng có sẵn'
            ],
            [
                'category_id' => 1, 'brand_id' => 2, 'product_name' => 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp', 'product_image' => 'ao_so_mi_gucci_chat_vai_lanh_bong_han_quoc.jpg',
                'product_price' => 280000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi gucci chất vải lanh bóng hàn quốc cao cấp'
            ],
            [
                'category_id' => 1, 'brand_id' => 2, 'product_name' => 'Áo sơ mi nam tay dài họa tiết cao cấp Gucci RSM051', 'product_image' => 'ao-so-mi-nam-gucci-rsm051.jpg',
                'product_price' => 240000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chất liệu: Kate lụa cao cấp, siêu mềm mịn, dày dặn, mặc cực thoải mái. Màu sắc: Trắng'
            ],
            //Gucci - phông (Thun) (2-2)
            [
                'category_id' => 2, 'brand_id' => 2, 'product_name' => 'Áo Polo Gucci Polo Ss2019 Màu Trắng', 'product_image' => 'ao-polo-gucci-polo-ss2019-mau-trang-5e71d4a8907bb-18032020145832.jpg',
                'product_price' => 12050000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo Polo Gucci Polo Ss2019 Màu Trắng được thiết kế cổ bẻ, tay ngắn, có họa tiết con ong nhiều màu đặc trưng của 
            Gucci tạo nên sự năng động, trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. 
            Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc.'
            ],
            [
                'category_id' => 2, 'brand_id' => 2, 'product_name' => 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương', 'product_image' => 'ao-polo-gucci-blue-polo-ss20-mau-xanh-duong-5e71cc4852f2f-18032020142248.jpg',
                'product_price' => 12050000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo Polo Gucci Blue Polo Ss20 Màu Xanh Dương được thiết kế cổ bẻ, tay ngắn, có họa tiết GG ở ngực đặc trưng của Gucci tạo nên sự năng động, 
            trẻ trung cho người mặc nhưng cũng không kém phần lịch lãm, sang trọng. Với chất liệu 100% cotton, áo có mềm, mịn, thông thoáng tạo cảm giác thoải mái 
            cho người mặc.'
            ],
            [
                'category_id' => 2, 'brand_id' => 2, 'product_name' => 'Áo Polo Gucci Ss2020 Màu Be', 'product_image' => 'ao-polo-gucci-ss2020-mau-trang-5e71b8e5d1ff4-18032020130005.jpg',
                'product_price' => 16900000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo được làm với chất liệu 100% cotton mềm, mịn, thông thoáng tạo cảm giác thoải mái cho người mặc. Form áo với các đường may vô cùng tinh tế và 
            chắc chắn hài lòng mọi khách hàng. Màu sắc đơn giản dễ dàng kết hợp với các trang phục khác nhau cho bạn trở nên nổi bật hơn. Áo thiết kế cổ bẻ, tay ngắn phù 
            hợp mặc trong nhiều hoàn cảnh khác nhau, từ công sở lịch lãm đến những trang phục mặc thường ngày.'
            ],
            //Gucci - Áo khoác (2-3)
            [
                'category_id' => 3, 'brand_id' => 2, 'product_name' => 'Blue & Off-White \'Gucci Band\' Varsity Jacket', 'product_image' => 'gucci-blue-and-off-white-gucci-band-varsity-jacket.jpg',
                'product_price' => 6200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác len ống tay dài và áo khoác bomber da cừu màu tím và trắng. Cổ áo đứng, cổ tay áo và viền len đan có gân lệch. Đóng cửa báo chí ở phía trước. 
            Các mảng logo thêu nhiều màu ở ngực. Túi có dây có đinh kim tự tháp ở eo. Văn bản và đồ họa thêu có màu trắng, đen, đỏ và xanh lam ở phía sau. 
            Túi vá có nút ở nội thất. Lót satin chần bông màu hồng. Màu của nhà cung cấp: Xanh lam. Sản xuất tại Ý.'
            ],
            [
                'category_id' => 3, 'brand_id' => 2, 'product_name' => 'Áo khoác Gucci Technical Jersey Jacket', 'product_image' => 'Gucci-Technical-Jersey-Jacket.jpg',
                'product_price' => 21600000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Lấy cảm hứng từ thời trang thập niên 90, thời kì hoàng kim của thời trang sportwear, áo khoác Gucci Technical Jersey Jacket có thiết kế như một chiếc áo khoác thể thao 
            với phần cổ cao, hai dải băng trắng – xanh lam chạy dọc hai bên cánh tay, nổi bật tên thương hiệu màu đỏ. Phần cổ tay bo chun trang trí bằng sọc xanh – 
            đỏ đặc trưng của hãng.'
            ],
            [
                'category_id' => 3, 'brand_id' => 2, 'product_name' => 'Black & White Patch Bomber Jacket', 'product_image' => 'gucci-black-and-white-patch-bomber-jacket.jpg',
                'product_price' => 5500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác bomber dài tay bằng len chải đen và da cừu trắng \'tự nhiên\'. Cổ áo đứng đan gân, cổ tay áo và viền sọc trắng và đỏ. 
            Đóng cửa báo chí ở phía trước. Đính thêu màu đen, đỏ và trắng ở ngực. Túi có dây ở eo. Các họa tiết thêu chữ màu xanh lam và màu cam ở phía sau. 
            Túi có dây ở bên trong. Đã lót đầy đủ. Phần cứng âm có khắc logo. Đường khâu theo đường chéo. Sản xuất tại Ý.'
            ],
            //Gucci - Dép(2-4)
            [
                'category_id' => 4, 'brand_id' => 2, 'product_name' => 'Black Pursuit Slides', 'product_image' => 'gucci-black-pursuit-slides.jpg',
                'product_price' => 7000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dép xỏ ngón cao su màu đen. Mở ngón chân tròn. Các sọc đặc trưng màu đỏ và xanh lá cây ở vamp. Chân đế cao su đúc. 
                Đế giữa bằng cao su có kết cấu hình tam giác có logo in nổi ở mặt ngoài. Đế ngoài bằng cao su có rãnh tam giác. Sản xuất tại Ý.'
            ],
            [
                'category_id' => 4, 'brand_id' => 2, 'product_name' => 'Dép Gucci Men’s GG Disney', 'product_image' => 'm2.jpg',
                'product_price' => 9900000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sự đồng bộ về tư duy và triết lý thẩm mỹ được gìn giữ qua nhiều thế hệ của nhà Gucci. Bắt nguồn từ lối sống xa hoa và phô trương 
            của giới quý tộc Châu Âu những năm đầu thế kỷ 20, nghề thủ công bậc thầy và thẩm mỹ nghệ thuật thời trang đậm chất Ý đã cho ra đời các “tác phẩm” chất 
            lượng cao cấp, xa xỉ và có giá trị vượt thời gian.'
            ],
            [
                'category_id' => 4, 'brand_id' => 2, 'product_name' => 'Gucci Kids', 'product_image' => 'Gucci_Kids.png',
                'product_price' => 6500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Lấy dấu hiệu từ giày nam và giày nữ, sọc Gucci được làm lại bằng cao su, nâng cao mặt trước của một đôi sandal trượt dành cho trẻ em. 
            Họa tiết thể thao lấy cảm hứng từ biểu tượng băng chạy dọc hai bên của bộ đồ thể thao cổ điển từ những năm 80. Các đường trượt hồ bơi này có lớp cao su 
            màu trắng với sọc Gucci đỏ và đen, chân đế cao su đúc và logo Gucci in nổi trên đế. Sản xuất tại Ý'
            ],
            //Gucci - Giầy(2-5)
            [
                'category_id' => 5, 'brand_id' => 2, 'product_name' => 'Giày Gucci Calfskin Black Sneaker Đen', 'product_image' => 'giay-gucci-calfskin-black-sneaker-mau-den-5efeec1a1f02f-03072020152810.jpg',
                'product_price' => 9450000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, 
            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn 
            cảm thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp 
            từng đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục 
            khác nhau để thay đổi phong cách cho bản thân theo sở thích. '
            ],
            [
                'category_id' => 5, 'brand_id' => 2, 'product_name' => 'Giày Thể Thao Gucci Ace Signature Sneaker Đen', 'product_image' => 'giay-ace-gucci-signature-sneaker-mau-den-5d8ec921c06a7-28092019094449.jpg',
                'product_price' => 15000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, 
            tràn đầy sức sống. Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm 
            thấy thoải mái. Giày basic rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng 
            đường kim mũi chỉ đảm bảo hài lòng ngay cả với khách hàng khó tính nhất. Màu sắc đen dễ dàng kết hợp với nhiều trang phục khác 
            nhau để thay đổi phong cách cho bản thân theo sở thích. '
            ],
            [
                'category_id' => 5, 'brand_id' => 2, 'product_name' => 'Giày Gucci Men\'s Ace Embroidered Sneaker Trắng', 'product_image' => 'giay-gucci-men-s-ace-embroidered-sneaker-mau-trang-5e04762f9f7ed-26122019155823.jpg',
                'product_price' => 16200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn. Form dáng trẻ trung, năng động, tràn đầy sức sống. 
            Chất liệu da cao cấp, bền bỉ chạy đua với thời gian. Đệm đế giày nâng niu bàn chân của bạn, giúp bạn luôn cảm thấy thoải mái. Giày basic 
            rất dễ phối đồ, phù hợp với mọi phong cách. Giày làm từ chất liệu da cao cấp, form giày chuẩn đẹp từng đường kim mũi chỉ đảm bảo hài lòng ngay 
            cả với khách hàng khó tính nhất. Màu sắc trắng dễ dàng kết hợp với nhiều trang phục khác nhau để thay đổi phong cách cho bản thân theo sở thích. 
            Sneaker Gucci GC luôn là sự lựa chọn hàng đầu bởi sự năng động, trẻ trung, tiện dụng, dễ dàng phối kết hợp với nhiều bộ trang phục và phù hợp trong 
            nhiều hoàn cảnh khác nhau.'
            ],
            //Gucci - Quần dài(2-6)
            [
                'category_id' => 6, 'brand_id' => 2, 'product_name' => 'Beige GG Logo Lounge Pants', 'product_image' => 'gucci-beige-gg-logo-lounge-pants.jpg',
                'product_price' => 35000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Relaxed-fit cotton-blend jersey lounge pants featuring logo pattern in beige and brown. Mid-rise. Two-pocket styling. Drawstring in off-white at 
            elasticized waistband. Rib knit cuffs in beige. Supplier color: Camel. Body: 55% polyester, 45% cotton. Trim: 72% polyester, 25% polyamide, 3% elastane. 
            Made in Italy.'
            ],
            [
                'category_id' => 6, 'brand_id' => 2, 'product_name' => 'Brown GG Flora Lounge Pants', 'product_image' => 'gucci-brown-gg-flora-lounge-pants.jpg',
                'product_price' => 37000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Tapered technical jersey lounge pants featuring logo pattern in brown and beige and multicolor graphic print throughout. Mid-rise. 
            Drawstring in off-white at elasticized waistband. Two-pocket styling. Tape trim in red and green at outseams. Supplier color: Brown 61% polyester, 
            39% cotton. Made in Italy.'
            ],
            [
                'category_id' => 6, 'brand_id' => 2, 'product_name' => 'Quần Gucci Technical Jersey', 'product_image' => 'Quan-Gucci-Technical-Jersey-14234.jpg',
                'product_price' => 23000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần Gucci Technical Jersey được thiết kế theo phong cách thể thao với hai dải băng sọc màu be bên hông, 
            phần gấu được bo chun nổi bật với những vạch kẻ đỏ – xanh lá vô cùng đặc trưng của hãng. Dòng chữ GUCCI cững được đặt khéo léo giữa các 
            đường kẻ bên hông quần, tạo nên sự nổi bật. Quần có hai túi trước và hai túi sau vô cùng tiện dụng. Quần và áo khoác Gucci Technical Jersey là 
            một sự kết hợp hoàn hảo đại diện cho phong cách athleisure năng động, thời thượng. Tuy nhiên, bạn cũng có thể kết hợp quần Gucci cùng áo phông, 
            sweater hay hoodie để tạo nên bản sắc thời trang riêng.'
            ],
            //Gucci - Quần jean(2-7)
            [
                'category_id' => 7, 'brand_id' => 2, 'product_name' => 'Indigo GG Jeans', 'product_image' => 'gucci-indigo-gg-jeans.jpg',
                'product_price' => 29000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Flared non-stretch denim jeans in indigo featuring logo pattern in tan. High-rise. Subtle fading throughout. 
            Five-pocket styling. Belt loops at waistband. Leather logo patch in black and gold-tone at back waistband. Buffed lambskin trim in brown at back pocket. 
            Zip-fly. Antiqued brass-tone and copper-tone hardware. Supplier color: Dark blue. Body: 100% cotton. Trim: 100% lambskin. Made in Italy.'
            ],
            [
                'category_id' => 7, 'brand_id' => 2, 'product_name' => 'Blue Symbol Tapered Jeans', 'product_image' => 'gucci-blue-symbol-tapered-jeans.jpg',
                'product_price' => 31500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Tapered non-stretch denim jeans in blue. Mid-rise. Multicolor embroidered graphic patches, fading, and whiskering throughout. 
            Five-pocket styling. Belt loops at waistband. Leather logo patch in tan at back waistband. Button-fly. Silver-tone hardware. Contrast stitching in tan. 
            Supplier color: Blue. Body: 100% cotton. Trim: 100% cotton. Made in Italy.'
            ],
            [
                'category_id' => 7, 'brand_id' => 2, 'product_name' => 'Black Skinny Jeans', 'product_image' => 'gucci-black-skinny-jeans.jpg',
                'product_price' => 15000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Skinny-fit washed stretch denim jeans in black. Mid-rise. Five-pocket styling. Belt loops at waistband. Embossed 
            leather logo patch in black and gold-tone at back waistband. Zip-fly. Antiqued bronze-tone and copper-tone hardware. Supplier color: 
            Black. Body: 98% cotton, 2% elastane. Made in Italy.'
            ],
            //Gucci - Quần short(2-8)
            [
                'category_id' => 8, 'brand_id' => 2, 'product_name' => 'Tiger Head Applique Stripe Cotton Shorts', 'product_image' => 'gucci-tiger-head-applique-stripe-cotton-shorts-brand-size-small-497251-x9i98-1295.jpg',
                'product_price' => 21000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Gucci Men\'s Bottoms. Fashion category: Shorts. SKU: 497251 X9I98 1295. Color: Grey. Tiger Head Applique Stripe Cotton Shorts. 
            Crafted in grey felted cotton jersey, this shorts from Gucci features an elasticated waistband with drawstring detail, front pockets and Gucci 
            jacquard stripe with tiger head applique. Material: 100% Cotton. Made in Italy.'
            ],
            [
                'category_id' => 8, 'brand_id' => 2, 'product_name' => 'Blue Denim Eco Washed GG Shorts', 'product_image' => 'gucci-blue-denim-eco-washed-gg-shorts.jpg',
                'product_price' => 23000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Non-stretch organic cotton denim shorts in blue. Jacquard logo pattern in beige throughout. Mid-rise. Four-pocket styling. 
            Partially elasticized waistband. Lambskin trim in tan at back pockets. Button-fly. Brown hardware.Supplier color: Dark blue. Body: 100% cotton. 
            Trim: 100% lambskin. Made in Italy. '
            ],
            [
                'category_id' => 8, 'brand_id' => 2, 'product_name' => 'Black GG Peony Print Shorts', 'product_image' => 'gucci-black-gg-peony-print-shorts.jpg',
                'product_price' => 28000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Silk crepe shorts in black featuring tonal logo pattern throughout. Mid-rise. Multicolor floral pattern throughout. 
            Four-pocket styling. Elasticized waistband. Button-fly. Supplier color: Black/Pink. Body: 100% silk. Lining: 100% cotton. Made in Italy.'
            ],
            //Gucci - Nón(2-9)
            [
                'category_id' => 9, 'brand_id' => 2, 'product_name' => 'Mũ Gucci Original GG Canvas Black', 'product_image' => 'mu-gucci-original-gg-canvas-black-5d9446b2bb3f7-02102019134154.jpg',
                'product_price' => 6500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mũ Gucci Original GG Canvas Black màu đen là chiếc mũ unisex cao cấp, làm bằng chất liệu vải Canvas được in hình logo "GG" nối nhau đặc trưng của hãng Gucci, 
            xung quanh mũ được may với các đường chỉ cực kì sắc nét.'
            ],
            [
                'category_id' => 9, 'brand_id' => 2, 'product_name' => 'Mũ Gucci Original GG Canvas Baseball With Web Beige', 'product_image' => 'mu-gucci-original-gg-canvas-baseball-with-web-beige-5c85ea2fac92b-11032019115511.jpg',
                'product_price' => 6200000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Hai bên mũ được thêu mỗi tấm vải gồm 2 màu đỏ xanh huyền thoại của hãng Gucci. Lưỡi mũ được bao bọc 1 miếng da quanh viền và được may mỗi tấm vải 2 bên với những đường chỉ rất tinh tế. 
            Miếng dán bằng da sau mũ, điều chỉnh tăng giảm được.'
            ],
            [
                'category_id' => 9, 'brand_id' => 2, 'product_name' => 'Mũ Gucci Original GG Canvas Baseball With Web Black', 'product_image' => 'mu-gucci-original-gg-canvas-baseball-with-web-size-m-5d1430bac03e2-27062019095802.jpg',
                'product_price' => 7600000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mũ Gucci Original GG Canvas Baseball With Web Black Size M là chiếc mũ cho nam cao cấp, làm bằng chất liệu vải Canvas được 
            in hình logo "GG" nối nhau đặc trưng của hãng Gucci, xung quanh mũ được may với các đường chỉ cực kì sắc nét.'
            ]
        ]);
        //Supreme
        DB::table('tbl_product')->insert([
            //Supreme - Áo sơ mi(3-1)
            [
                'category_id' => 1, 'brand_id' => 3, 'product_name' => 'Supreme Men\'s Black X Mike Kelley More Love Hours Shirt', 'product_image' => 'supremeblackXMikeKelleyMoreLoveHoursShirt.jpeg',
                'product_price' => 11115000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chiếc áo \'Rayon Supreme x Mike Kelley \' là sự hợp tác giới hạn giữa gã khổng lồ thời trang đường phố NYC và nghệ sĩ người Mỹ nổi tiếng với những tác phẩm trừu tượng. Chiếc áo sơ mi rayon thời tiết ấm áp, với kết cấu thoáng mát và phong cách dễ mặc'
            ],
            [
                'category_id' => 1, 'brand_id' => 3, 'product_name' => 'SupremeObamaShirt', 'product_image' => 'Supreme Obama Shirt.jpg',
                'product_price' => 9800500, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Tổng thống của bạn là ai? Hãy thể hiện lòng trung thành của bạn với Tổng thống thứ 44 của Hoa Kỳ với chiếc Áo sơ mi Obama cotton màu xanh lá cây này của Supreme. Có bạn có thể. Có hình in toàn bộ, hình in ảnh, cổ áo nhọn, cài nút phía trước, tay áo ngắn và túi trước ngực'
            ],
            [
                'category_id' => 1, 'brand_id' => 3, 'product_name' => 'Supreme Rose Buffalo Plaid Shirt', 'product_image' => 'SupremeRoseBuffaloPlaidShirt.jpg',
                'product_price' => 6204000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi sọc ca rô trâu bông hồng bông màu xanh hoàng gia của hãng tối cao có cổ áo cổ điển, cài cúc phía trước, tay áo dài, khuy cài và viền cong. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            [
                'category_id' => 1, 'brand_id' => 3, 'product_name' => 'Supreme x Comme des Garçons Graphic Button Up Shirt', 'product_image' => 'SupremexCommedesGarçonsGraphicButtonUpShirt.png',
                'product_price' => 9778000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Comme des Garçons x Supreme Graphic Button-Up Shirt là một món đồ trang nhã hoặc giản dị tập hợp những lý tưởng của hai gã khổng lồ thời trang dạo phố. -- Sản xuất tại Pháp '
            ],
            [
                'category_id' => 1, 'brand_id' => 3, 'product_name' => 'Supreme CDG Harold Hunter baseball top', 'product_image' => 'SupremeCDGHaroldHunterbaseballtop.png',
                'product_price' => 14090000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Hãy giữ cho trang phục thường ngày trở nên thú vị 
                với việc bổ sung chiếc áo khoác này từ tối cao. Được làm thủ công từ bông, chiếc áo bóng chày này có in hình Harold Hunter. Khá là đoạn hội thoại! 
                Có cổ tròn, tay ngắn, cài cúc trước và in hình họa tiết -- Sản xuất tại Pháp '
            ],
            //Supreme - Áo Thun (3-2)
            [
                'category_id' => 2, 'brand_id' => 3, 'product_name' => 'Supreme Bela Lugosi Tee', 'product_image' => 'SupremeBelaLugosiTee.png',
                'product_price' => 1893000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supreme Bela Lugosi Tee dành cho những người hâm mộ ma cà rồng, những người đánh giá cao cơn sốt Gothic 
            nguyên bản bắt đầu từ gần 100 năm trước. Hình ảnh ở giữa ngực có hình ảnh nổi tiếng trong bộ phim kinh điển năm 1931 "Dracula", 
            trong đó nam diễn viên Bela Lugosi.-- Sản xuất tại Hoa Kỳ '
            ],
            [
                'category_id' => 2, 'brand_id' => 3, 'product_name' => 'Supreme Winter Print T-shirt', 'product_image' => 'SupremeWinterPrintT-shirt.png',
                'product_price' => 2123000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Cảm thấy lạnh mùa đông? Giải quyết điều đó một cách dễ dàng với chiếc áo phông có logo mùa đông cotton trắng này của Supreme. 
                Sẽ sớm trở thành mùa yêu thích mới của bạn. Có cổ tròn, tay ngắn, in hình họa tiết và phom dáng vừa vặn -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'category_id' => 2, 'brand_id' => 3, 'product_name' => 'Supreme Faces Print T-shirt', 'product_image' => 'SupremeFacesPrintT-shirt.png',
                'product_price' => 2377000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Tối và quyến rũ. Chiếc áo phông in hình mặt cotton màu xanh nước biển này của Supreme có ống tay dài vừa vặn thoải mái, 
                hoàn chỉnh với hình in đồ họa của những khuôn mặt không có mắt để tạo nên một kết thúc kỳ cục. Bạn sẽ có mọi ánh nhìn về bạn. Đặc 
                trưng với cổ tròn, tay áo dài, viền và cổ tay áo có gân -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'category_id' => 2, 'brand_id' => 3, 'product_name' => 'Supreme Printed Pocket T-shirt', 'product_image' => 'SupremePrintedPocketT-shirt.png',
                'product_price' => 3715000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Bỏ tất cả những rắc rối của bạn vào \'túi\' và đi khám phá thế giới trong chiếc áo phông đen tối cao này. Tất cả đều tốt'
            ],
            [
                'category_id' => 2, 'brand_id' => 3, 'product_name' => 'Supreme Logo T-shirt', 'product_image' => 'SupremeLogoT-shirt.png',
                'product_price' => 5146000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chiếc áo phông này khẳng định gu thẩm mỹ đường phố của Supreme. Được làm từ cotton, chiếc áo phông này có cổ tròn, 
                tay dài và in logo trên áo. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. 
                Chỉ dự trữ giày dép và quần áo được tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            //Supreme - Áo Khoác (3-3)
            [
                'category_id' => 3, 'brand_id' => 3, 'product_name' => 'Supreme City Lights Puffer Jacket', 'product_image' => 'SupremeCityLightsPufferJacket.png  ',
                'product_price' => 13614000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác ngoài như một suy nghĩ sau? Không còn nữa. Chiếc áo khoác tay phồng City Lights này của Supreme sẽ là tâm điểm trong 
                toàn bộ diện mạo của bạn'
            ],
            [
                'category_id' => 3, 'brand_id' => 3, 'product_name' => 'Supreme Cowboy Print Denim Work Jacket', 'product_image' => 'SupremeCowboyPrintDenimWorkJacket.png',
                'product_price' => 26558000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác denim họa tiết cao bồi bằng cotton nhiều màu của hãng cao cấp có cổ áo nhọn, khóa zip phía trước, hai túi phía trước và hình 
            in đồ họa. Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được tìm 
            kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới'
            ],
            [
                'category_id' => 3, 'brand_id' => 3, 'product_name' => 'Supreme Aerial Tapestry Harrington Jacket', 'product_image' => 'SupremeAerialTapestryHarringtonJacket.png',
                'product_price' => 14721000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác Aerial Tapestry Harrington điểm nổi bật màu xanh da trời bông. Đường chân trời của Thành phố New York cổ điển buộc phía trước 
                giấu kín áo dài tay -- Sản xuất tại Hoa Kỳ '
            ],
            [
                'category_id' => 3, 'brand_id' => 3, 'product_name' => 'Supreme Reversible Color Blocked Fleece Jacket', 'product_image' => 'SupremeReversibleColorBlockedFleeceJacket.png',
                'product_price' => 11699000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nếu điều đầu tiên xuất hiện trong đầu bạn khi nhìn vào bức tranh này, là bức tranh của Mondrian, thì bạn đang đi đúng hướng. 
                Tự hào với bản in hình học nhiều màu, chiếc áo khoác lông cừu tối cao này sẽ trở thành một nghệ sĩ thực thụ - ý của chúng tôi là phong cách.'
            ],
            [
                'category_id' => 3, 'brand_id' => 3, 'product_name' => 'Supreme Patchwork Anorak Jacket', 'product_image' => 'SupremePatchworkAnorakJacket.png',
                'product_price' => 61653000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chiếc áo khoác anorak chắp vá bằng cotton nhiều màu này có mũ trùm đầu bằng dây rút, khóa zip phía trước, túi phía trước được 
                giấu kín, logo trước ngực, túi trước và tay áo dài'
            ],
            //Supreme - Dép (3-4)
            [
                'category_id' => 4, 'brand_id' => 3, 'product_name' => 'Supreme Flip Flop Sandals Black White', 'product_image' => 'SupremeFlipFlopSandalsBlackWhite.jpg',
                'product_price' => 1593000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dép xỏ ngón Supreme Đế ngoài bằng cao su tự nhiên, siêu thoải mái, đế trượt nano, đế mút chống trượt.'
            ],
            [
                'category_id' => 4, 'brand_id' => 3, 'product_name' => 'Supreme Suprize Design 2018ss White Red Sandals Slippers', 'product_image' => 'SupremeSuprizeDesign2018ssWhiteRedSandalsSlippers.jpg',
                'product_price' => 1593000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thiết kế tinh tế mới nhất của Supreme Suprize 2018 với Dép sandal nam nữ màu trắng / đỏ '
            ],
            [
                'category_id' => 4, 'brand_id' => 3, 'product_name' => 'Supreme Suprize Design 2018ss Black White Sandals Slippers', 'product_image' => 'SupremeSuprizeDesign2018ssBlackWhiteSandalsSlippers.jpg',
                'product_price' => 1592000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chất lượng cao Supreme Suprize Design 2018ss Dép nam nữ màu đen / trắng '
            ],
            [
                'category_id' => 4, 'brand_id' => 3, 'product_name' => 'Supreme Flip Flop Sandals White Red Summer Beach Slippers', 'product_image' => 'SupremeFlipFlopSandalsWhiteRedSummerBeachSlippers.jpg',
                'product_price' => 1593000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dép xỏ ngón Supreme chất lượng cao cho nam-nữ đi biển mùa hè trắng / đỏ Dép đi trong nhà'
            ],
            [
                'category_id' => 4, 'brand_id' => 3, 'product_name' => 'Supreme Frette Slippers White ', 'product_image' => 'SupremeFretteSlippersWhite.png',
                'product_price' => 2769000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supreme đã cùng với nhà sản xuất kính râm, Frette, hợp tác sản xuất một đôi dép lê. Đôi dép được phát hành với hai màu, đỏ và trắng, và có từ "Supreme" được viết trên đôi. 
                Supreme x Frette Slippers được phát hành vào thứ Năm, ngày 6 tháng 6 năm 2019'
            ],
            //Supreme - Giày (3-5)
            [
                'category_id' => 5, 'brand_id' => 3, 'product_name' => 'Supreme Vans Authentic Pro Checkered Red', 'product_image' => 'SupremeVansAuthenticProCheckeredRed.jpg',
                'product_price' => 45155000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supreme chuẩn bị cho Vans ’Skate-ready Pro Authentic Pro với một sự thay đổi độc đáo trong thiết kế bàn cờ, có in ca rô màu đỏ và trắng có gắn logo hộp Supreme vào thiết kế. 
                Tương phản với đế giữa màu trắng, đôi giày cũng thực hiện mô hình lực kéo bánh quế cổ điển trên đế ngoài.'
            ],
            [
                'category_id' => 5, 'brand_id' => 3, 'product_name' => 'Supreme NIke x NBA x Air Force 1 Mid 07 \'White\' AQ8017-100', 'product_image' => 'SupremeNIkexNBAxAirForce1Mid07\'White\'AQ8017-100.jpg',
                'product_price' => 16983000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supreme và Nike đã bỏ một sự hợp tác lớn khác cho mùa xuân / hè 2018 khi họ hợp tác với NBA. 
                Bộ sưu tập giày dép và quần áo có in toàn bộ bao gồm các logo NBA và Supreme. Điểm nổi bật của bộ sưu tập là 
                Supreme x NBA x Nike Air Force 1 Mid. Một sự trở lại với thời trang dạo phố đầu năm 2000, phối màu trắng này 
                của Supreme x NBA x Nike Air Force 1 Mid có phần trên bằng da cao cấp với chữ "Supreme" được thêu trên dây đeo mắt cá chân.'
            ],
            [
                'category_id' => 5, 'brand_id' => 3, 'product_name' => 'Supreme Nike Air More Uptempo Suptempo Red', 'product_image' => 'NikeAirMoreUptempoSupremeSuptempoRed.jpg',
                'product_price' => 31357000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Được thiết kế bởi Wilson Smith, được mặc bởi Scottie Pippen, Nike Air More Uptempo - 
                được biết đến với thương hiệu “AIR” lớn ở hai bên và giữa - là một trong những đôi giày thể thao bóng 
                rổ táo bạo nhất từ trước đến nay. Tùy chọn Varsity Red này có phần trên bằng da lộn sôi động. Chữ Tối cao có màu trắng với ánh sáng trong bóng tối; midsole 
                cũng được tạo điểm nhấn bởi Varsity Red và trắng. Các đầu ren có các từ "Thế giới" và "Nổi tiếng".'
            ],
            [
                'category_id' => 5, 'brand_id' => 3, 'product_name' => 'Supreme Comme des Garcons Nike Air Force 1 Low Shirt', 'product_image' => 'SupremeCommedesGarconsNikeAirForce1LowShirt.jpg',
                'product_price' => 33872000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Bộ sưu tập Xuân / Hè 2017 của Supreme bao gồm sự hợp tác rất được mong đợi với COMME des GARÇONS SHIRT. 
                Bản phát hành lấy cảm hứng từ tác phẩm ‘Giải phẫu giấy’ của nghệ sĩ ý tưởng Stephen J Shanabrook, được anh sử dụng 
                làm tài liệu nguồn cho quảng cáo trong chiến dịch Xuân / Hè 2010 của COMME des GARÇONS SHIRT. Phần trang phục của bộ 
                sưu tập Supreme x COMME des GARÇONS SHIRT xuất hiện đầu tiên, tiếp theo là phiên bản đầy nghệ thuật này của Nike Air Force 1. 
                Màu trắng băng giá trên nền trắng. Đồng thương hiệu Supreme và CDG xuất hiện ở mặt trong của lưỡi để hoàn thiện thiết kế sạch sẽ.'
            ],
            [
                'category_id' => 5, 'brand_id' => 3, 'product_name' => 'Supreme Nike Air Max 98 Snakeskin', 'product_image' => 'SupremeNikeAirMax98Snakeskin.jpg',
                'product_price' => 16429000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dễ dàng là phối màu được tìm kiếm nhiều nhất của sự hợp tác năm 2016 giữa Supreme và Nike, phiên bản này kỳ lạ với phần trên bằng da 
                rắn với lưới màu xám và các chi tiết phản chiếu.'
            ],
            //Supreme - Quần dài (3-6)
            [
                'category_id' => 6, 'brand_id' => 3, 'product_name' => 'Supreme Warm Up Pants SS18', 'product_image' => 'SupremeWarmUpPantsSS18.jpg',
                'product_price' => 4313000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần Supreme Warm Up là một mẫu quần trong bộ sưu tập Xuân / Hè 2018 của thương hiệu giày trượt băng. Một họa tiết rằn ri 
                màu xanh lam với màu xanh lá cây, xám và đen quân sự bao phủ ống quần. Được thiết kế với nhiều khoảng trống, những chiếc quần này được 
                cắt để vừa vặn thoải mái và bao gồm một dây thắt lưng đàn hồi và còng có khóa ở phía dưới. Logo Supreme màu trắng nằm dọc theo khe khóa 
                dán ở mỗi mắt cá chân và ống quần được hoàn thiện với một túi có khóa kéo ở phía sau.'
            ],
            [
                'category_id' => 6, 'brand_id' => 3, 'product_name' => 'Supreme Side Logo Track Pants', 'product_image' => 'SupremeSideLogoTrackPants.png',
                'product_price' => 7407000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Hãy xuống phố thật phong cách với chiếc quần thể thao có logo bên này. Logo của Supreme New York được in sang một bên chắc 
                chắn sẽ quay đầu. Đơn giản mà hiệu quả.'
            ],
            [
                'category_id' => 6, 'brand_id' => 3, 'product_name' => 'Supreme Logo Print Track Pants', 'product_image' => 'SupremeLogoPrintTrackPants.png',
                'product_price' => 12322000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. Cập nhật tủ quần áo hàng ngày của bạn 
                trong mùa này với những chiếc quần thể thao in logo cotton màu đen này của hãng Supreme có chiều dài dài, cạp chun co giãn và hai túi phía trước.'
            ],
            [
                'category_id' => 6, 'brand_id' => 3, 'product_name' => 'Supreme x Nike Trail Running Trousers', 'product_image' => 'SupremexNikeTrailRunningTrousers.png',
                'product_price' => 7407000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Còn gì tốt hơn một thương hiệu thời trang dạo phố? Tại sao tất nhiên là một thương hiệu thời trang dạo phố hợp tác với gã 
                khổng lồ thể thao Nike. Lấy ví dụ như chiếc quần chạy bộ Nike Trail màu hồng này của Supreme. Chạy trên. Có dây thắt lưng co giãn, ống côn, 
                túi xẻ bên và chiều dài đều đặn.'
            ],
            [
                'category_id' => 6, 'brand_id' => 3, 'product_name' => 'Supreme Warm Up Track Pants', 'product_image' => 'SupremeWarmUpTrackPants.png',
                'product_price' => 5515000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'You better Warm Up because once you put on these Supreme track pants you\'ll want to run a thousand miles just to show them off. 
                Và chúng tôi không thể đánh giá bạn. Chúng tôi có thể sẽ làm như vậy.'
            ],
            //Supreme -Quần jean(3-7)
            [
                'category_id' => 7, 'brand_id' => 3, 'product_name' => 'Louis Vuitton X Supreme Camo Jeans', 'product_image' => 'LouisVuittonXSupremeCamoJeans.png',
                'product_price' => 36850000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần jean camo Louis Vuitton X Supreme màu xanh lá cây của hãng cao cấp có dây thắt lưng với vòng đai, nút và khóa kéo, 
                thiết kế năm túi, chi tiết đinh tán tông màu vàng và in logo toàn bộ. Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết 
                các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo 
                tính xác thực -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 7, 'brand_id' => 3, 'product_name' => 'Supreme Stone Washed Slim Jeans Stone Washed Indigo', 'product_image' => 'SupremeStoneWashedSlimJeansStoneWashedIndigo.png',
                'product_price' => 4013000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Phong cách 5 túi cổ điển với nút bay, túi một đồng xu, đinh tán đồng và miếng dán logo bằng da ở mặt sau -- Sản xuất tại Hoa Kỳ'
            ],
            [
                'category_id' => 7, 'brand_id' => 3, 'product_name' => 'Supreme Logo Stripe Jacquard Regular Jean Blue Hype Clothinga Thumbnail', 'product_image' => 'SupremeLogoStripJacquardRegularJeanBlueHypeClothingaThumbnail.jpg',
                'product_price' => 13950000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sọc Logo Tối Cao Jacquard Jean Thường. The Supreme\'s Droplist được lặp lại trong cuộc hẹn thứ Năm thông thường, đánh dấu sự sụt giảm của tuần thứ 15. Được giới thiệu ở đây là một dòng quần jean denim vừa vặn thông thường với họa tiết Jacquard, một kỹ thuật khâu nối tiếp cho phép tạo ra các hình học phức tạp.'
            ],
            [
                'category_id' => 7, 'brand_id' => 3, 'product_name' => 'Supreme White Slim Jeans', 'product_image' => 'SupremeWhiteSlimJeans.jpg',
                'product_price' => 8071000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Phiên bản denim trắng của quần jean mỏng cứng cổ điển -- Miếng dán da màu tự nhiên với thương hiệu Supreme -- Sản xuất tại Mỹ'
            ],
            [
                'category_id' => 7, 'brand_id' => 3, 'product_name' => 'Supreme Waves Work Jeans Multicolor', 'product_image' => 'SupremeWavesWorkJeansMulticolor.jpg',
                'product_price' => 8902000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Phong cách 5 túi cổ điển với nút bấm, túi một đồng xu, đinh tán oxit đồng và miếng dán logo bằng da ở mặt sau.'
            ],
            //Supreme -Quần short(3-8)
            [
                'category_id' => 8, 'brand_id' => 3, 'product_name' => 'Supreme Straight-Leg Cargo Shorts', 'product_image' => 'SupremeStraight-LegCargoShorts.png',
                'product_price' => 4313000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thời tiết trở nên ấm hơn? Những chiếc quần đùi hàng hiệu Supreme chân thẳng này sẽ là món đồ đầu tiên mà bạn muốn. Và ai có 
                thể đổ lỗi cho bạn? '
            ],
            [
                'category_id' => 8, 'brand_id' => 3, 'product_name' => 'Supreme Patchwork Pique Shorts', 'product_image' => 'SupremePatchworkPiqueShorts.jpg',
                'product_price' => 4313000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Được cung cấp bởi một thị trường giày thể thao hàng đầu giải quyết các loại giày không mặc, đã bán hết, theo nhu cầu hiếm. 
                Mỗi sản phẩm được kiểm tra nghiêm ngặt bởi các chuyên gia giàu kinh nghiệm đảm bảo tính xác thực. 
                Tay phải màu đỏ, chân trái màu vàng. Với những chiếc quần short pique bằng vải cotton nhiều màu này từ Supreme. Đừng để bị xoắn. Có phần nhô cao, 
                dây thắt lưng co giãn, túi bên, túi sau, thiết kế khối màu ốp và vừa vặn thoải mái.'
            ],
            [
                'category_id' => 8, 'brand_id' => 3, 'product_name' => 'Supreme Straight-leg Work Shorts', 'product_image' => 'SupremeStraight-legWorkShorts.png',
                'product_price' => 3713000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Thời tiết chuyển sang ấm hơn? Những chiếc quần đùi đi làm cho chân thẳng này là cặp đôi mà bạn sẽ đạt được. Logo hộp tối cao là chi tiết lý tưởng.'
            ],
            [
                'category_id' => 8, 'brand_id' => 3, 'product_name' => 'Supreme x Lacoste Logo Sweat Shorts', 'product_image' => 'SupremexLacosteLogoSweatshorts.png',
                'product_price' => 4912000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Ngay từ sự hợp tác giữa Lacoste và Supreme, những chiếc quần đùi thể thao có logo bằng cotton màu đen này sẽ là người bạn đồng hành 
                hoàn hảo cho dù bạn đang ở trên sân đấu hay trên ghế dài. Nhặt bóng rổ hay bỏng ngô, tùy bạn. Có dây thắt lưng đàn hồi, túi bên, túi vá phía sau, 
                chiều dài quá đầu gối và logo thêu ở bên cạnh.'
            ],
            [
                'category_id' => 8, 'brand_id' => 3, 'product_name' => 'Supreme Printed Shorts', 'product_image' => 'SupremePrintedShorts.png',
                'product_price' => 5512000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần short in nhiều màu của hãng Supreme có phần cạp ở giữa, cạp chun co giãn, túi sau, chiều dài ngắn và họa tiết hoa. 
                Những phong cách này được cung cấp bởi một thị trường giày thể thao và trang phục dạo phố cao cấp. Chỉ dự trữ giày dép và quần áo được 
                tìm kiếm nhiều nhất, họ cung cấp và tuyển chọn một số mặt hàng khó tìm nhất từ khắp nơi trên thế giới.'
            ],
            //Supreme -mũ (3-9)
            [
                'category_id' => 9, 'brand_id' => 3, 'product_name' => 'Supreme Static Knitted Beanie Hat', 'product_image' => 'SupremeStaticKnittedBeanieHat.jpg',
                'product_price' => 1685000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Trượt lên một chút ấm áp. Được chế tác từ chất liệu dệt kim mềm mại, chiếc mũ len dệt kim tĩnh từ Supreme này được hoàn 
                thiện với logo thêu trên vành mũ để tạo thêm điểm nhấn. Các phụ kiện hoàn hảo.'
            ],
            [
                'category_id' => 9, 'brand_id' => 3, 'product_name' => 'Supreme Checkerboard Boucle Camp Cap SS19', 'product_image' => 'SupremeCheckerboardBoucleCampCapSS19.png',
                'product_price' => 2377000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nếu bạn đi xuống rừng hôm nay, hãy chắc chắn rằng bạn được trang bị đầy đủ. Hôm nay là ngày bạn đi dã ngoại, vì vậy đừng để 
                bị bắt gặp nếu không có chăn hoặc thậm chí là chiếc mũ cắm trại màu đỏ và trắng pha trộn kẻ caro \'SS19\' của Supreme. Chỉ cần không bị lạc. Có vành cứng,
                 miếng dán logo phía trước, dây buộc có thể điều chỉnh được, họa tiết ca rô và vải tweed hoa văn.'
            ],
            [
                'category_id' => 9, 'brand_id' => 3, 'product_name' => 'Supreme Coated Linen Camp Cap', 'product_image' => 'SupremeCoatedLinenCampCap.jpg',
                'product_price' => 4315000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Đã đến lúc thay đổi phong cách của bạn. Tự hào với biểu tượng Supreme mang tính biểu tượng ở mặt trước, Mũ cắm trại bằng vải 
                lanh tráng màu đỏ này là phụ kiện duy nhất bạn cần'
            ],
            [
                'category_id' => 9, 'brand_id' => 3, 'product_name' => 'Supreme South 2 West 8 Jungle Hat Camo', 'product_image' => 'SupremeSOUTH2WEST8JungleHatCamo.jpg',
                'product_price' => 4267000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Vải cotton 3 lớp chống thấm nước với dây cotton đóng và nút da. Băng vải tiện ích xung quanh vành và logo in 3M Reflective. 
                Sản xuất dành riêng cho Tối cao.'
            ],
            [
                'category_id' => 9, 'brand_id' => 3, 'product_name' => 'Supreme Clayton Patterson/Supreme Skulls 5-Panel-White', 'product_image' => 'SupremeClaytonPattersonSupremeSkulls5PanelWhite.jpg',
                'product_price' => 3459000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Tất cả các loại mũ bằng vải cotton chino twill 5-Panel có chốt đóng. Hình thêu trên mặt trước, mặt bên, mặt sau và tấm che mặt. 
                Tác phẩm nghệ thuật gốc của Clayton Patterson.'
            ]
        ]);
        //Hermes
        DB::table('tbl_product')->insert([
            //Hermes  - Áo sơ mi (4-1)
            [
                'category_id' => 1, 'brand_id' => 4, 'product_name' => 'Hermes Micro Shirt', 'product_image' => 'HermesMicroShirt.jpg',
                'product_price' => 23651000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi vải cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu "Caleche" -- Cổ tay áo, cổ áo 
                trong và nút hướng ra ngoài được buộc chặt bằng nút ngọc trai -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 1, 'brand_id' => 4, 'product_name' => 'Hermes Shirt', 'product_image' => 'HermesShirt.jpg',
                'product_price' => 27112000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi cotton đan chéo (100% cotton) -- Mặt trước bên trái có thêu "Caleche" -- Tay áo và chốt cài phía 
                trước được buộc chặt bằng các nút khảm xà cừ -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 1, 'brand_id' => 4, 'product_name' => 'Hermes Jacket Shirt With Swing Collar', 'product_image' => 'HermesJacketShirtWithSwingCollar.jpg',
                'product_price' => 25958000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác sơ mi tay ngắn bằng vải bông và in "Rayures rythmees fil a fil" với cổ bẻ và phần dưới có gân (100% cotton) -- 
                Sản xuất tại Pháp -- Chiều dài: 26,8 "| Kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước. '
            ],
            [
                'category_id' => 1, 'brand_id' => 4, 'product_name' => 'Hermes Polo Shirt With Striped Ribbon Detail', 'product_image' => 'HermesPoloShirtWithStripedRibbonDetail.jpg',
                'product_price' => 13614000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo sơ mi polo bằng vải cotton trơn với cổ áo thẳng linh hoạt và chi tiết ruy băng sọc (100% cotton) -- Sản xuất tại Pháp -- 
                Chiều dài: 29,1 "| Các kích thước được chỉ ra tương ứng với kích thước 39, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước.'
            ],
            [
                'category_id' => 1, 'brand_id' => 4, 'product_name' => 'Hermes Competition Shirt', 'product_image' => 'HermesCompetitionShirt.jpg',
                'product_price' => 12229000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo dài tay thi đấu -- Cắt thẳng -- Vải mềm và thoáng khí -- Cổ áo và cổ tay áo bằng vải bông có nút đinh hình yên ngựa 
                "Hermes Sellier" -- (73% cotton, 24% polyamide, 3% elasthane)'
            ],
            //Hermes  - Áo thun (4-2)
            [
                'category_id' => 2, 'brand_id' => 4, 'product_name' => 'Hermes Micro Embroidered Pocket T-Shirt', 'product_image' => 'HermesMicroEmbroideredPocketT-Shirt.jpg',
                'product_price' => 11999000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo thun siêu nhỏ in áo thun cotton trơn (100% cotton) -- Cổ áo trang trí sườn -- Túi có thêu "Clochette" -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 2, 'brand_id' => 4, 'product_name' => 'Hermes Bicolor Jogging T-Shirt', 'product_image' => 'HermesBicolorJoggingTShirt.jpg',
                'product_price' => 10499000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo thun tay ngắn cổ thuyền chạy bộ bằng cotton với các chi tiết Toilovent trên vai và tay áo (100% cotton) -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 2, 'brand_id' => 4, 'product_name' => 'Hermes Labyrinthe T-Shirt', 'product_image' => 'HermesLabyrintheT-Shirt.jpg',
                'product_price' => 27112000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => ' Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in "Labyrinthe" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 2, 'brand_id' => 4, 'product_name' => 'Herems Maillons T-Shirt', 'product_image' => 'HeremsMaillonsT-Shirt.jpg',
                'product_price' => 28265000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo thun cổ thuyền tay ngắn bằng vải jacquard, len crepe thập niên 120 và in "Maillons" với một sợi chỉ khổ 18 -- 
                Một minh họa trang nhã về các liên kết Chaine d\'Ancre mang tính biểu tượng (100% len) -- Sản xuất tại Ý '
            ],
            [
                'category_id' => 2, 'brand_id' => 4, 'product_name' => 'Hermes Rayures Mix And Match T-Shirt', 'product_image' => 'HermesRayuresMixAndMatchT-Shirt.jpg',
                'product_price' => 22382000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo thun cổ thuyền tay ngắn bằng vải bông crepe và in "Rayures Mix and match" với một sợi chỉ khổ 18 (100% cotton) -- Sản xuất tại Ý '
            ],
            //Hermes  - Áo khoát (4-3)
            [
                'category_id' => 3, 'brand_id' => 4, 'product_name' => 'Hermes Rayures Et Maillons Esquisses Straight Cut Jacket', 'product_image' => 'HermesRayuresEtMaillonsEsquissesStraightCutJacket.jpg',
                'product_price' => 72105000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác cắt thẳng bằng cotton và in "Rayures maillons esquisses" với cổ áo cài cúc, khóa kéo hai chiều và túi bên hông có cúc và khóa kéo (100% cotton) -- Sản xuất tại Pháp -- 
                Chiều dài lưng: 25,6 "| Kích thước được chỉ ra tương ứng với kích thước 48, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước. '
            ],
            [
                'category_id' => 3, 'brand_id' => 4, 'product_name' => 'Hermes Reversible Rib Trim Jacket', 'product_image' => 'HermesReversibleRibTrimJacket.jpg',
                'product_price' => 93448000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác có viền có thể đảo ngược bằng vải cotton, in chữ "Danse des chevaux" và Toilovent chống thấm nước với cổ áo và còng có 
                viền, túi hai bên có khóa kéo và zip (80% nylon và 20% elastane) -- Sản xuất tại Pháp -- Chiều dài lưng: 25,6 "| Kích thước được chỉ ra tương ứng 
                với kích thước 48, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước.'
            ],
            [
                'category_id' => 3, 'brand_id' => 4, 'product_name' => 'Hermes Doudoune Courte', 'product_image' => 'HermesDoudouneCourte.jpg',
                'product_price' => 145363000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác cưỡi ngựa bằng da hươu đã giặt (100% da hươu) -- Lớp lót với họa tiết "H passant" -- 
                Dây chuyền mạ palladium -- Buộc chặt túi bằng zip mạ palladium -- Chốt phía trước ở giữa với các nút mạ palladium khắc 
                "Clou de selle" và nút sừng phẳng -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 3, 'brand_id' => 4, 'product_name' => 'Hermes Sartorial Jacket', 'product_image' => 'HermesSartorialJacket.jpg',
                'product_price' => 53069000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác Sartorial vải lanh (100% vải lanh) -- Túi và lót túi phía trước bên trái bên trong bằng vải bông xương cá co giãn 
                -- Túi có đường ống -- Chốt phía trước với các nút mạ palladium tráng men và nút sừng phẳng'
            ],
            [
                'category_id' => 3, 'brand_id' => 4, 'product_name' => 'Hermes RayuresS erties 24 Twins Light Jacket', 'product_image' => 'HermesRayuresSerties24TwinsLightJacket.jpg',
                'product_price' => 65183000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Jacket in cotton and "Rayures serties" print with notched collar, 2 horn buttons, 2 mesh pockets, one front pocket and 
                contrasting fabric on the front closure (100% cotton) -- Made in Italy -- Back length: 30.3" | The dimensions indicated correspond to 
                a size 50, they may vary by +/- 0.4" depending on the size'
            ],
            //Hermes  - Dép (4-4)
            [
                'category_id' => 4, 'brand_id' => 4, 'product_name' => 'Hermes Oran Sandal White', 'product_image' => 'HermesOranSandalWhite.jpg',
                'product_price' => 14537000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sandal in Box da bê với đường cắt chữ "H" mang tính biểu tượng -- Một phong cách mang tính biểu tượng của Hermes, 
                hình bóng này là một phần thiết yếu trong mọi tủ quần áo'
            ],
            [
                'category_id' => 4, 'brand_id' => 4, 'product_name' => 'Hermes Legend Sandal', 'product_image' => 'HermesLegendSandal.jpg',
                'product_price' => 19844000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sandal cao gót bằng da bê với đường cắt chữ "H" mang tính biểu tượng và dây đeo mảnh ở mắt cá chân -- 
                Một phong cách mang tính biểu tượng của Hermes, hình bóng này là một phần thiết yếu trong mọi tủ quần áo'
            ],
            [
                'category_id' => 4, 'brand_id' => 4, 'product_name' => 'Hermes Santorini Sandal', 'product_image' => 'HermesSantoriniSandal.jpg',
                'product_price' => 18228000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sandal da bê với chi tiết viền thô, chi tiết cắt chữ "H" và dây đeo mảnh ở mắt cá chân -- Một phong cách sang trọng 
                và giản dị hoàn hảo để sử dụng hàng ngày'
            ],
            [
                'category_id' => 4, 'brand_id' => 4, 'product_name' => 'Hermes Avenue Sandal', 'product_image' => 'HermesAvenueSandal.jpg',
                'product_price' => 24228000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sandal bằng da bê với khóa Kelly mạ palladium mang tính biểu tượng --  Đối với sự thanh lịch hàng ngày'
            ],
            [
                'category_id' => 4, 'brand_id' => 4, 'product_name' => 'Hermes Premiere 70 Sandal', 'product_image' => 'HermesPremiere70Sandal.jpg',
                'product_price' => 27112000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Sandal mang tính biểu tượng bằng da lộn và sa tanh với các chi tiết pha lê và dây đeo mắt cá chân mỏng -- Sản xuất tại Ý'
            ],
            //Hermes  - Giày (4-5)
            [
                'category_id' => 5, 'brand_id' => 4, 'product_name' => 'Hermes Boomerang Sneaker', 'product_image' => 'HermesBoomerangSneaker.jpg',
                'product_price' => 20305000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày sneaker tối giản bằng da bê Epsom in với đế màu cam mang tính biểu tượng -- Một cái nhìn hiện đại và hợp thời trang -- 
                Sản xuất tại Ý'
            ],
            [
                'category_id' => 5, 'brand_id' => 4, 'product_name' => 'Hermes Crew Sneaker', 'product_image' => 'HermesCrewSneaker.jpg',
                'product_price' => 18228000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày thể thao bằng da dê đan và da lộn với đế cao su đặc trưng -- Một cái nhìn sang trọng và thể thao'
            ],
            [
                'category_id' => 5, 'brand_id' => 4, 'product_name' => 'Hermes Avantage Sneaker', 'product_image' => 'HermesAvantageSneaker.jpg',
                'product_price' => 18228000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày thể thao bằng da bê với họa tiết "H en Biais" tương phản -- Một thiết kế đồ họa và kiểu dáng đẹp -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 5, 'brand_id' => 4, 'product_name' => 'Hermes Addict Sneaker', 'product_image' => 'HermesAddictSneaker.jpg',
                'product_price' => 19613000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày thể thao đan hai màu với ảo ảnh quang học -- Bản diễn giải lại phong cách cổ điển -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 5, 'brand_id' => 4, 'product_name' => 'Hermes Alessandro Loafer', 'product_image' => 'HermesAlessandroLoafer.jpg',
                'product_price' => 20305000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày lười lái xe bằng da bò lộn với dây da bện và khóa "Chaine d\'Ancre" -- Một chiếc giày lười kiểu hải lý lý tưởng cho đất liền 
                hoặc biển'
            ],
            //Hermes  - Quần dài (4-6)
            [
                'category_id' => 6, 'brand_id' => 4, 'product_name' => 'Hermes Esprit Jogging H Pants', 'product_image' => 'HermesEspritJoggingHPants.jpg',
                'product_price' => 27689000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần chạy bộ Esprit chất liệu len "Maille Voyage" với họa tiết chữ "H" trơn (len nguyên chất 100%) -- 
                Thắt lưng và mắt cá chân có viền gân -- Thắt lưng có dây rút bằng len với các chi tiết chạm khắc mạ palladium'
            ],
            [
                'category_id' => 6, 'brand_id' => 4, 'product_name' => 'Hermes Chino Pants', 'product_image' => 'HermesChinoPants.jpg',
                'product_price' => 33457000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần ống loe chất liệu cotton co giãn kép (96% cotton, 4% elastane) -- 
                Túi, lót trước và sau bằng bông xương cá co giãn -- Thắt lưng bên trong bằng nút sừng -- 
                Chốt phía trước bằng zip mạ palladium -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 6, 'brand_id' => 4, 'product_name' => 'Hermes Carrot Pants', 'product_image' => 'HermesCarrotPants.jpg',
                'product_price' => 39225000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần cà rốt lưng cao bằng len nhiệt đới (len nguyên chất 100%) -- Chốt mặt trước bằng nút còi 
                -- Chốt lưng bằng khóa mạ palladium -- Sản xuất tại Pháp'
            ],
            [
                'category_id' => 6, 'brand_id' => 4, 'product_name' => 'Hermes Saint Germain Fitted Pants', 'product_image' => 'HermesSaintGermainFittedPants.jpg',
                'product_price' => 14537000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần được may bằng vải chéo cotton co giãn (97% cotton và 3% elastane) -- Sản xuất tại Ý -- Độ mở của chân: 7,5 
                "| Các kích thước được chỉ ra tương ứng với cỡ 42, chúng có thể thay đổi +/- 0,4" tùy thuộc vào kích thước'
            ],
            [
                'category_id' => 6, 'brand_id' => 4, 'product_name' => 'Hermes Poste Et Cavalerie-Jogging Pants', 'product_image' => 'HermesPosteEtCavalerie-JoggingPants.jpg',
                'product_price' => 25381000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần chạy bộ bằng vải thô in "Poste et Cavalerie" (100% cotton) -- Túi trong áo bông -- Dây thắt lưng trang trí sườn -- Dây thắt lưng có dây bện -- 
                Dây có chi tiết mạ palladium -- Sản xuất tại Pháp '
            ],
            //Hermes  - Quần jean (4-7)
            [
                'category_id' => 7, 'brand_id' => 4, 'product_name' => 'Hermes Denim Jeans', 'product_image' => 'HermesDenimJeans.jpg',
                'product_price' => 33457000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần jean denim bằng vải cotton với họa tiết "Chaine d\'Ancre\' tương phản (100% cotton) -- 
                Túi lót bằng bông xương cá co giãn -- Hai túi trước và túi được vá với đinh tán mạ palladium khắc \'Clou de selle\' 
                và hai túi sau -- Cạp lưng bằng da nổi \'Hermes Paris\' ở mặt phải -- Chốt phía trước bằng nút mạ palladium khắc chữ \'Clou de selle\' 
                -- Sản xuất tại Ý '
            ],
            [
                'category_id' => 7, 'brand_id' => 4, 'product_name' => 'Hermes Pantalon Court', 'product_image' => 'HermesPantalonCourt.jpg',
                'product_price' => 37356000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => '100% cotton -- Size: FR36, FR37, FR38  '
            ],
            [
                'category_id' => 7, 'brand_id' => 4, 'product_name' => 'Hermes Denim Street Style Plain Long Jeans', 'product_image' => 'HermesDenimStreetStylePlainLongJeans.jpg',
                'product_price' => 37610000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần jean từ HERMES, Phong cách đường phố, Trơn, Dài '
            ],
            [
                'category_id' => 7, 'brand_id' => 4, 'product_name' => 'Hermes Pocket Pants', 'product_image' => 'HermesPocketPants.jpg',
                'product_price' => 38302000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => '100% cotton -- Size: 36, 38, 40, 42'
            ],
            [
                'category_id' => 7, 'brand_id' => 4, 'product_name' => 'Hermes Jeans Denim Shorts', 'product_image' => 'HermesJeansDenimShorts.jpg',
                'product_price' => 37864000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần short denim bằng vải cotton với họa tiết tương phản "chaine d\'ancre\' (100% cotton) -- lót túi bằng vải bông xương cá kéo dài -- 
                hai túi trước và túi có miếng vá với đinh tán mạ palladium khắc "clou de selle" và hai túi sau -- dây thắt lưng sau bằng da dập nổi \'hermes paris\' 
                ở phía bên phải -- khóa cài phía trước bằng nút mạ palladium khắc \'clou de selle\' -- khóa phía trước bằng zip mạ palladium được làm tại Ý'
            ],
            //Hermes  - Quần short (4-8)
            [
                'category_id' => 8, 'brand_id' => 4, 'product_name' => 'Hermes Circuit 24 Faubourg Beach Shorts', 'product_image' => 'HermesCircuit24FaubourgBeachShorts.jpg',
                'product_price' => 16844000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần đùi đi biển in hình "Circuit 24 Faubourg" in polyamide (100% polyamide) -- Dây thắt lưng có dây co giãn -- Chi tiết dây cao su 
                -- Ổ cắm dây với khoen mạ palladium và chi tiết cao su tròn -- Dây thắt lưng có thun bên trong -- Túi sau với aquazip -- Sản xuất tại Ý  '
            ],
            [
                'category_id' => 8, 'brand_id' => 4, 'product_name' => 'Hermes Nagoya Shorts With Double Pocket', 'product_image' => 'HermesNagoyaShortsWithDoublePocket.jpg',
                'product_price' => 17075000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần đùi cắt thẳng bằng mũi khoan cotton không thấm nước với túi kép bù đắp và 2 túi lưới sau cài cúc (100% cotton) 
                -- Sản xuất tại Ý -- Chiều dài: 19,3 "| Độ mở chân: 11,4" | Tăng: 10,8 "'
            ],
            [
                'category_id' => 8, 'brand_id' => 4, 'product_name' => 'Hermes Shorts', 'product_image' => 'HermesShorts.jpg',
                'product_price' => 36341000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần short bằng vải chéo cotton co giãn kép (96% cotton, 4% elastane) -- Túi và lót lưng bằng vải bông xương cá co giãn 
                -- Nắp túi bên hông bằng chốt khóa mạ palladium khắc chữ "Clou de selle" -- Chốt lưng bằng khóa mạ palladium -- Sản xuất tại Ý'
            ],
            [
                'category_id' => 8, 'brand_id' => 4, 'product_name' => 'Hermes Bicolor Ribbed Jogging Shorts', 'product_image' => 'HermesBicolorRibbedJoggingShorts.jpg',
                'product_price' => 11537000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần đùi chạy bộ có gân hai màu bằng cotton với các chi tiết Toilovent ở hai bên (100% cotton) -- Sản xuất tại Ý '
            ],
            [
                'category_id' => 8, 'brand_id' => 4, 'product_name' => 'Hermes Bicolor Ribbed Jogging Shorts Black', 'product_image' => 'HermesBicolorRibbedJoggingShortsBlack.jpg',
                'product_price' => 11537000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần đùi chạy bộ có gân hai màu bằng cotton với các chi tiết Toilovent ở hai bên (100% cotton) -- Sản xuất tại Ý'
            ],
            //Hermes  - Nón (4-9)
            [
                'category_id' => 9, 'brand_id' => 4, 'product_name' => 'Hermes Hood', 'product_image' => 'HermesHood.jpg',
                'product_price' => 12229000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mỗi miếng petit h là duy nhất: chất liệu, hoa văn và màu sắc của sản phẩm của bạn sẽ là một điều bất ngờ 
                -- Mũ trùm đầu chống thấm nước bằng polyamide (59%), cotton (41%) và tơ tằm (100% lụa) -- Máy hút mùi có túi đựng -- Cỡ phổ thông.'
            ],
            [
                'category_id' => 9, 'brand_id' => 4, 'product_name' => 'Hermes Nevada Hello Mr Farrier Cap', 'product_image' => 'HermesNevadaHelloMrFarrierCap.jpg',
                'product_price' => 10499000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nắp bằng vải cotton co giãn với miếng dán da cừu "Hello Mr Farrier" -- Sản xuất tại Ý 
                -- Chiều cao vương miện: 6,7 "| Chiều dài tấm che: 2,8"'
            ],
            [
                'category_id' => 9, 'brand_id' => 4, 'product_name' => 'Hermes Miles Cap', 'product_image' => 'HermesMilesCap.jpg',
                'product_price' => 21689000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mũ bằng vải lanh đã giặt với tấm che mặt bằng da bê Swift khâu yên ngựa và thêu chữ "H Droit". 
                Bạn có thể tìm thấy một dải điều chỉnh bằng da bê Swift với khóa Etriviere ở phần phía sau -- Sản xuất tại Pháp 
                -- Chiều cao vương miện: 6,7 "| Chiều dài tấm che: 2,8\"'
            ],
            [
                'category_id' => 9, 'brand_id' => 4, 'product_name' => 'Hermes Petit Chalutier BucketHat', 'product_image' => 'HermesPetitChalutierBucketHat.jpg',
                'product_price' => 8422000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mũ xô bằng vải canvas có in "Petit Chalutier" (58% cotton và 42% linen) -- In phun ở Ý -- Sản xuất tại Pháp -- Kích thước 52 '
            ],
            [
                'category_id' => 9, 'brand_id' => 4, 'product_name' => 'Hermes Riley Sport Cap', 'product_image' => 'HermesRileySportCap.jpg',
                'product_price' => 8422000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nắp bằng gabardine kỹ thuật chống nước với đàn hồi sọc hai màu và chi tiết mạ palladium Clou de Selle -- Sản xuất tại Pháp -- Chiều cao vương miện: 6,7 "| Chiều dài tấm che: 2,8" '
            ]
        ]);
        //Calvin klein
        DB::table('tbl_product')->insert([
            //Calvin klein  - Áo sơ mi (5-2)
            [
                'category_id' => 2, 'brand_id' => 5, 'product_name' => 'TONAL LOGO SLIM POLO SHIRT', 'product_image' => 'TONAL LOGO SLIM POLO SHIRT.jpg',
                'product_price' => 790000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'This polo shirt from Calvin Klein Jeans is made from 100% cotton. It is cut in a slim fit, with a pointed collar, 
                and a 2-button placket with a tonal embroidered logo.'
            ],
            [
                'category_id' => 2, 'brand_id' => 5, 'product_name' => 'URBAN SKATER BOX PRINT TEE', 'product_image' => 'URBAN SKATER BOX PRINT TEE.jpg',
                'product_price' => 650000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of URBAN SKATE. Cut to a regular fit, this cotton blend tee from Calvin Klein Jeans feature a 
                photographic skater box print at the chest. Finished with an updated monogram print at the back.'
            ],
            [
                'category_id' => 2, 'brand_id' => 5, 'product_name' => 'TONAL SPRAY PRINT LOGO TEE', 'product_image' => 'TONAL SPRAY PRINT LOGO TEE.jpg',
                'product_price' => 590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of HYBRID. A subtle spray print adds an urban touch to this cotton stretch tee 
                from Calvin Klein Jeans. It is cut to a slim fit, featuring a classic logo print across the chest.'
            ],
            [
                'category_id' => 2, 'brand_id' => 5, 'product_name' => 'ILLUMINATED CK LOGO TEE', 'product_image' => 'ILLUMINATED CK LOGO TEE.jpg',
                'product_price' => 590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of REFLECTION. Cut to a regular fit, this cotton tee from Calvin Klein Jeans 
                feature an illuminated logo print at the front for an elevated look.'
            ],
            [
                'category_id' => 2, 'brand_id' => 5, 'product_name' => 'MONOGRAM CLEAR PRINT TEE', 'product_image' => 'MONOGRAM CLEAR PRINT TEE.jpg',
                'product_price' => 590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Cut to a regular fit, this cotton tee from Calvin Klein Jeans feature a minimal logo 
                print at the front and an oversized clear monogram print at the back.'
            ],
            //Calvin klein  - Áo khoác (5-3)
            [
                'category_id' => 3, 'brand_id' => 5, 'product_name' => 'RIB KNIT SWEATER WITH QUILT SLEEVES', 'product_image' => 'RIB KNIT SWEATER WITH QUILT SLEEVES.jpg',
                'product_price' => 845000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'This season, the timeless rib-knit pullover sweater from Calvin Klein Jeans is updated with contemporary details. 
                Made from a luxurious wool blend, the sweater is tailored with a crew neck, long quilted sleeves and a sleeve zip pocket.'
            ],
            [
                'category_id' => 3, 'brand_id' => 5, 'product_name' => 'CHINESE NEW YEAR CAPSULE GRAPHIC SWEATSHIRT', 'product_image' => 'CHINESE NEW YEAR CAPSULE GRAPHIC SWEATSHIRT.jpg',
                'product_price' => 763000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of CNY CAPSULE. Celebrate the Chinese New Year with this reinterpreted top from 
                Calvin Klein Jeans. Cut to a regular fit, this cotton sweatshirt features a special print at the front in honor of 
                the Year of the Ox, finished with an embroidered monogram on a cuff.'
            ],
            [
                'category_id' => 3, 'brand_id' => 5, 'product_name' => 'GRAPHIC BACK PRINT SWEATER', 'product_image' => 'GRAPHIC BACK PRINT SWEATER.jpg',
                'product_price' => 858000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Crafted from a wool blend, this pullover sweater from Calvin Klein Jeans combines a timeless rib knit design and a 
                playful graphic pattern at the back. finished with a statement logo patch at the back of the waist.'
            ],
            [
                'category_id' => 3, 'brand_id' => 5, 'product_name' => 'TV SERVICE KNIT PULLOVER', 'product_image' => 'TV SERVICE KNIT PULLOVER.jpg',
                'product_price' => 1156000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'A classic design with a playful twist, this 100% wool pullover jumper from ck Calvin Klein features TV-themed details on the front and back. 
                It is tailored with a crew neck, long sleeves and a comfortable slouchy fit.'
            ],
            [
                'category_id' => 3, 'brand_id' => 5, 'product_name' => 'KNIT MERINO TOP WITH NYLON POCKET', 'product_image' => 'KNIT MERINO TOP WITH NYLON POCKET.jpg',
                'product_price' => 1316000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Crafted from fine spun merino, this knit top from ck calvin klein has a stand up collar with adjustable drawstrings, 
                front zip opening and long sleeves. the top also features a front pouch pocket and the top zip closure gusset made from nylon.
                '
            ],
            //Calvin klein  - Quần Jean (5-7)
            [
                'category_id' => 7, 'brand_id' => 5, 'product_name' => 'INDIGO RINSE DENIM STRAIGHT LEG JEANS', 'product_image' => 'INDIGO RINSE DENIM STRAIGHT LEG JEANS.jpg',
                'product_price' => 1590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Classic straight leg fit jeans in an indigo rinse wash. Made from traditional, organic, and recycled cotton blend denim for a sustainable design.'
            ],
            [
                'category_id' => 7, 'brand_id' => 5, 'product_name' => 'GARMENT-DYED CANVAS STRAIGHT LEG JEANS', 'product_image' => 'GARMENT-DYED CANVAS STRAIGHT LEG JEANS.jpg',
                'product_price' => 1590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Classic straight leg fit jeans in a garment-dyed wash. Made from organic cotton blend canvas with custom logo detailing.'
            ],
            [
                'category_id' => 7, 'brand_id' => 5, 'product_name' => 'CKJ 017 THE BASICS BODY SKINNY JEANS', 'product_image' => 'CKJ 017 THE BASICS BODY SKINNY JEANS.jpg',
                'product_price' => 1490000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of THE BASICS. Cut in a CKJ 017 fit, these men\'s jeans are designed in a mid-rise and skinny silhouette. 
                They have a zip fly, 5-pocket style and body-defining details for a contoured fit. Finished with a monogram patch at the back waist.'
            ],
            [
                'category_id' => 7, 'brand_id' => 5, 'product_name' => 'CKJ 059 URBAN SKATE BODY TAPER JEANS', 'product_image' => 'CKJ 059 URBAN SKATE BODY TAPER JEANS.jpg    ',
                'product_price' => 1290000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'From the Collection of URBAN SKATE. Cut in a CKJ 059 fit, these men\'s jeans are shaped in a low-rise and tapered silhouette, 
                with body-defining details for a contoured fit. They have a zip fly, 5-pocket style and a monogram patch at the back.'
            ],
            [
                'category_id' => 7, 'brand_id' => 5, 'product_name' => 'CKJ 059 BODY TAPER JEANS', 'product_image' => 'CKJ 059 BODY TAPER JEANS.jpg',
                'product_price' => 954000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed in a CKJ 059 fit, these men\'s jeans feature a low-rise waist and tapered legs with body-defining 
                details for a contoured fit. The overlapping text prints add a contemporary twist to the look. They have a zip fly with a 
                logo-engraved metal button, a 5-pocket style and an embroidered logo at the back.'
            ],
            //Calvin Klein - Quần Shorts (5-8)
            [
                'category_id' => 8, 'brand_id' => 5, 'product_name' => 'French Terry Drawstring Shorts', 'product_image' => 'French Terry Drawstring Shorts.jpg',
                'product_price' => 695000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with a solid body and iconic logo embroidery, these updated shorts feature 
                a plush cotton french terry for premium, all-day comfort. Finished with a drawstring waistband and 
                pull-on styling, dual front slip pockets and a straight leg for a relaxed silhouette.'
            ],
            [
                'category_id' => 8, 'brand_id' => 5, 'product_name' => 'Slim Fit Straight Leg Chino 9 Shorts', 'product_image' => 'Slim Fit Straight Leg Chino 9 Shorts.jpg',
                'product_price' => 416000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with a solid body, these refined chino shorts feature a slim fit for an easy-to-style look. 
                Designed with front slip pockets, back welt pockets, a signature woven logo tag and a 9" inseam.'
            ],
            [
                'category_id' => 8, 'brand_id' => 5, 'product_name' => 'Logo Piping Drawstring Pull-On Shorts', 'product_image' => 'Logo Piping Drawstring Pull-On Shorts.jpg',
                'product_price' => 416000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Detailed with logo piping, these shorts feature a drawstring waistband and front slip pockets.'
            ],
            [
                'category_id' => 8, 'brand_id' => 5, 'product_name' => 'French Terry Drawstring Shorts 3', 'product_image' => 'French Terry Drawstring Shorts 3.jpg',
                'product_price' => 500000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with a solid body and iconic logo embroidery, these updated shorts feature a plush cotton french 
                terry for premium, all-day comfort. Finished with a drawstring waistband and pull-on styling, dual front slip pockets and a 
                straight leg for a relaxed silhouette.
                '
            ],
            [
                'category_id' => 8, 'brand_id' => 5, 'product_name' => 'Printed Drawstring Pull-On 7 Shorts', 'product_image' => 'Printed Drawstring Pull-On 7 Shorts.jpg',
                'product_price' => 516000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with an allover abstract print, these modern shorts feature a drawstring waistband and a 7" inseam.'
            ],
            //Calvin Klein - Quần dài (5-6)
            [
                'category_id' => 6, 'brand_id' => 5, 'product_name' => 'Monogram Logo Drawstring Fleece Joggers', 'product_image' => 'Monogram Logo Drawstring Fleece Joggers.jpg',
                'product_price' => 790000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Crafted from a plush cotton knit blend for premium comfort, these on-trend sweatpants are 
                made with a retro-inspired, iconic logo at the front. Finished with a drawstring waistband, front slip pockets and ribbed knit trim for a snug fit.'
            ],
            [
                'category_id' => 6, 'brand_id' => 5, 'product_name' => 'Solid Pull-On Pants', 'product_image' => 'Solid Pull-On Pants.jpg',
                'product_price' => 590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with moisture wicking technology to help keep you cool and dry, these athletic joggers are made with a solid body and 
                reflective accents. Features an elasticated waistband, front zip pockets, logo printing and elasticated cuffs.'
            ],
            [
                'category_id' => 6, 'brand_id' => 5, 'product_name' => 'Modern Stretch Slim Fit Linen Blend Chino Pants', 'product_image' => 'Modern Stretch Slim Fit Linen Blend Chino Pants.jpg',
                'product_price' => 590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Cut in a sleek slim fit, these essential summer chinos are made with a cotton linen stretch blend for effortless comfort. 
                Designed with front slip pockets, back pockets with an embroidered CK logo and a solid look.'
            ],
            [
                'category_id' => 6, 'brand_id' => 5, 'product_name' => 'Skinny Fit Black Suit Pants', 'product_image' => 'Skinny Fit Black Suit Pants.jpg',
                'product_price' => 845000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Made with four-season wool with natural stretch, these suit pants are made with a timeless solid black design, an extended 
                tab closure, front slip pockets, back button pockets and skinny fit shaping.'
            ],
            [
                'category_id' => 6, 'brand_id' => 5, 'product_name' => 'Move 365 Slim Fit Stretch Cotton 5-Pocket Pants', 'product_image' => 'Move 365 Slim Fit Stretch Cotton 5-Pocket Pants.jpg',
                'product_price' => 954000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Refined pants that move like your favorite sweats. Feature packed with innovative fabric technologies, these pants are part of our Move 365 collection, 
                designed for life-on-the-go.'
            ],
            //Calvin Klein - Quần dài (5-1)
            [
                'category_id' => 1, 'brand_id' => 5, 'product_name' => 'Dot Print Logo Button-Down Long Sleeve Shirt', 'product_image' => 'Dot Print Logo Button-Down Long Sleeve Shirt.jpg',
                'product_price' => 980000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with an allover dot print, this modern button-down shirt is made from lightweight cotton stretch blend with a sleek 
                silhouette. Features a point collar with button-front closures, barrel cuffs, an embroidered CK logo at the chest and a shirttail hem.'
            ],
            [
                'category_id' => 1, 'brand_id' => 5, 'product_name' => 'Liquid Touch Jacquard Dot Button-Down Shirt', 'product_image' => 'Liquid Touch Jacquard Dot Button-Down Shirt.jpg',
                'product_price' => 880000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supremely soft with a cool feel and a lustrous finish, this signature Calvin Klein long sleeve shirt is crafted from liquid touch cotton for the ultimate 
                in premium comfort. Features a jacquard dot design, a point collar, button-front closures and a shirttail hem for a refined, tailored look.'
            ],
            [
                'category_id' => 1, 'brand_id' => 5, 'product_name' => 'Dot Print Logo Button-Down Long Sleeve Shirt 2', 'product_image' => 'Dot Print Logo Button-Down Long Sleeve Shirt 2.jpg',
                'product_price' => 980000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Designed with an allover dot print, this modern button-down shirt is made from lightweight cotton stretch blend with a sleek silhouette. Features a point 
                collar with button-front closures, barrel cuffs, an embroidered CK logo at the chest and a shirttail hem.'
            ],
            [
                'category_id' => 1, 'brand_id' => 5, 'product_name' => 'Liquid Touch Jacquard Dot Button-Down Shirt 2', 'product_image' => 'Liquid Touch Jacquard Dot Button-Down Shirt 2.jpg',
                'product_price' => 880000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Supremely soft with a cool feel and a lustrous finish, this signature Calvin Klein long sleeve shirt is 
                crafted from liquid touch cotton for the ultimate in premium comfort. Features a jacquard dot design, a point collar, 
                button-front closures and a shirttail hem for a refined, tailored look.'
            ],
            [
                'category_id' => 1, 'brand_id' => 5, 'product_name' => 'Slim Fit Herringbone Point Collar Performance Non-Iron Dress Shirt', 'product_image' => 'Slim Fit Herringbone Point Collar Performance Non-Iron Dress Shirt.jpg',
                'product_price' => 1590000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'This steel slim fit dress shirt features a solid herringbone design, a point collar and high-tech non-iron performance 
                cotton fabric to wick away moisture for cool, dry comfort.'
            ]
        ]);
        //Chanel
        DB::table('tbl_product')->insert([
            //Chanel - Áo Khoác (6-3)
            [
                'category_id' => 3, 'brand_id' => 6, 'product_name' => 'Face-patch oversized hoodie', 'product_image' => 'face-patch oversized hoodie.jpg',
                'product_price' => 940000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Let\'s face it, this will elevate your wardrobe. Made from blush pink organic cotton, 
                this oversized hoodie from Acne Studios makes a charming addition to your comfy-wear rotation. Keep it cute.'
            ],
            [
                'category_id' => 3, 'brand_id' => 6, 'product_name' => 'Face-patch hoodie', 'product_image' => 'face-patch hoodie.jpg',
                'product_price' => 960000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'It\'s time to slip into something a little more comfortable. Like this face-patch hoodie from Acne Studios. Its laidback design makes it perfect for off-duty days.'
            ],
            [
                'category_id' => 3, 'brand_id' => 6, 'product_name' => 'Face patch oversized sweatshirt', 'product_image' => 'face patch oversized sweatshirt.jpg',
                'product_price' => 990000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Acne Studios keeps it cool, casual and care-free with this powder pink oversized sweatshirt. Made from cotton and detailed with the signature 
                face patch at the chest, this relaxed top masters the laid-back vibe you\'re going for.'
            ],
            [
                'category_id' => 3, 'brand_id' => 6, 'product_name' => 'Oversized face-patch sweatshirt', 'product_image' => 'Oversized face-patch sweatshirt.jpg',
                'product_price' => 980000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'How cool can you get? A lot more you\'re wearing this Acne Studios sweatshirt. 
                Featuring a signature face patch at the chest, this piece will be your number one choice for a relaxed outfit.'
            ],
            //Chanel - Quần short (6-8)
            [
                'category_id' => 8, 'brand_id' => 6, 'product_name' => 'Chanel sports line pants', 'product_image' => 'Chanel sports line pants.jpg',
                'product_price' => 940000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chanel’s Sport Line combines minimalist sophistication, practical materials and outstanding design. Case in point: these black cotton shorts. 
                Featuring a front button fastening, belt loops, side pockets, contrasting white trims and a rear buttoned flap pocket.'
            ],
            [
                'category_id' => 8, 'brand_id' => 6, 'product_name' => 'CC logo shorts', 'product_image' => 'CC logo shorts.jpg',
                'product_price' => 863000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Heiress of a neutrally refined palette and impeccable clean cuts, the maison 
                Chanel persists in its reign as one of the best luxury brands for the sophisticated and elegant.'
            ],
            [
                'category_id' => 8, 'brand_id' => 6, 'product_name' => '1995 loose-cut shorts', 'product_image' => '1995 loose-cut shorts.jpg',
                'product_price' => 940000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chanel makes your summer easy with these navy blue wool tailored shorts. Now that you\'re reassured you\'ll feel fresh and look your best, you can go enjoy the warm days.'
            ],
            [
                'category_id' => 8, 'brand_id' => 6, 'product_name' => 'Wide-legged denim shorts', 'product_image' => 'Wide-legged denim shorts.jpg',
                'product_price' => 863000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Casual days by the beach? These Chanel denim wide-legged shorts will take you there. With classic contrast 
                stitching and diamond quilting on the rear patch pockets, this is The look to be at The place.'
            ],
            //Channel - Quần dài (6-6)
            [
                'category_id' => 6, 'brand_id' => 6, 'product_name' => '2010\'s Chanel trousers', 'product_image' => '2010\'s Chanel trousers.jpg',
                'product_price' => 695000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chanel sports line pants.jpg - 940000 - Chanel’s Sport Line combines minimalist sophistication, practical 
                materials and outstanding design. Case in point: these black cotton shorts. Featuring a front button fastening, belt loops, 
                side pockets, contrasting white trims and a rear buttoned flap pocket.'
            ],
            [
                'category_id' => 6, 'brand_id' => 6, 'product_name' => '2005 high-waisted flared trousers', 'product_image' => '2005 high-waisted flared trousers.jpg',
                'product_price' => 795000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chanel makes your summer easy with these navy blue wool tailored shorts. Now that you\'re reassured you\'ll feel 
                fresh and look your best, you can go enjoy the warm days.'
            ],
            [
                'category_id' => 6, 'brand_id' => 6, 'product_name' => 'Sports Line zipped details cropped trousers', 'product_image' => 'Sports Line zipped details cropped trousers.jpg',
                'product_price' => 995000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Purchasing this item continues its narrative, so you can be confident that you’re making a POSITIVELY CONSCIOUS choice 
                for the planet.Looking for an excuse to have an all-occasion Chanel closet? That\'s why the Sports Line is here. With a casual 
                cropped length, these salamander orange cotton blend trousers showcase multiple zipped details.'
            ]
        ]);
        //Nike
        DB::table('tbl_product')->insert([
            //Nike - Áo sơ mi (7 - 1)
            [
                'category_id' => 1, 'brand_id' => 7, 'product_name' => 'Men\'s Woven Skate Top ', 'product_image' => 'nigeria-woven-skate-top-xPksnd.jpg',
                'product_price' =>1218000 , 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nigeria Top phối lại một chiếc áo có cúc cổ điển với hình in lấy cảm hứng từ bản sắc Super Eagle của đội. Nó được làm từ vải thấm mồ hôi để giúp bạn thoải mái từ sân cỏ này sang mặt đường khác.'
            ],
            //Nike - Áo thun (7 - 2)
            [
                'category_id' => 2, 'brand_id' => 7, 'product_name' => 'Áo thun thể thao Nike Tech Fleece màu đen', 'product_image' => '22434766-1-black.jpg',
                'product_price' => 1031000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nike Tech Fleece vải. Áo ba lớp cotton nhẹ,cung cấp độ ấm nhẹ và phản ứng với chuyển động tự nhiên của người mặc.'
            ],
            [
                'category_id' => 2, 'brand_id' => 7, 'product_name' => 'Áo phông đồ họa Nike oversized vừa vặn màu trắng', 'product_image' => '21392532-1-white.jpg',
                'product_price' => 659000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo mềm mại, thoáng khí, vải áo thun, 100% cotton.'
            ],
            [
                'category_id' => 2, 'brand_id' => 7, 'product_name' => 'Áo phông Nike Dri-FIT', 'product_image' => 'dri-fit-graphic-training-t-shirt-3BHcCx.jpg',
                'product_price' => 659000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo phông Nike Dri-FIT được thiết kế với đồ họa Swoosh đến từ văn hóa đi xe đạp thành phố. Chất liệu vải mềm mại với công nghệ thấm mồ hôi giúp bạn luôn khô thoáng và dễ chịu.'
            ],
            //Nike - Áo khoác (7 - 3)
            [
                'category_id' => 3, 'brand_id' => 7, 'product_name' => 'Áo khoác dệt Williwaw nam Nike Sportswear Reissue', 'product_image' => 'sportswear-reissue-williwaw-woven-jacket-vlXn18.jpg',
                'product_price' => 4029000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác dệt kim Nike Sportswear Reissue là một chiếc áo khoác thuyền buồm được làm từ vải dệt cao cấp và có thiết kế đúng với bản gốc. Sự kết hợp giữa in, thêu và vá mang đến một kết cấu đa dạng và thẩm mỹ cổ điển sẵn sàng cho việc xếp lớp trong thời tiết ấm áp.'
            ],
            [
                'category_id' => 3, 'brand_id' => 7, 'product_name' => 'Áo khoác chạy bộ nam Nike Essential Run Division Flash', 
                'product_image' => 'essential-run-division-flash-running-jacket-pqKdFr.jpg',
                'product_price' => 1748000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Áo khoác Nike Essential được cập nhật với chất liệu vải không thấm nước và độ che phủ an toàn. Thiết kế nhẹ của nó giúp chống chọi với thời tiết khi bạn ra đường.'
            ],
            [
                'category_id' => 3, 'brand_id' => 7, 'product_name' => 'Áo khoác thể thao nam NikeLab', 
                'product_image' => 'nikelab-track-jacket-rL5gx6.jpg',
                'product_price' =>3419000 , 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quay trở lại với các thiết kế cổ điển, lấy cảm hứng từ đường đua, NikeLab Track Jacket được làm từ vải dệt cho cảm giác êm ái. Túi zip giữ cho đồ của bạn an toàn khi di chuyển.'
            ],
            //Nike - Dép (7 - 4)
            [
                'category_id' => 4, 'brand_id' => 7, 'product_name' => 'DÉP NIKE BENASSI TRẮNG ĐEN', 
                'product_image' => 'hang-chinh-hang-dep-nike-benassi-trang-den.jpg',
                'product_price' => 750000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Mang rất êm phối màu cực độc không đụng hàng.'
            ],
            [
                'category_id' => 4, 'brand_id' => 7, 'product_name' => 'Dép Nike Kawa Slide Sandals Black White Màu Đen', 
                'product_image' => 'dep-nike-kawa-slide-sandals-black-white-mau-den-5fae499be26d8-13112020155347.jpg',
                'product_price' => 950000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nike Kawa Slide Sandals được làm từ chất liệu da tổng hợp và pylons đem lại cảm giác thoải mái khi mang. Form dép với các đường nét vô cùng tinh tế và sắc sảo, đế dép với chất liệu cao su mềm, nhẹ, bền có đặc điểm êm chân và thông thoáng thích hợp cùng bạn hoạt động suốt ngày dài.'
            ],
            [
                'category_id' => 4, 'brand_id' => 7, 'product_name' => 'Nike Victori One pool slides', 
                'product_image' => '16531897_32110943_1000.jpg',
                'product_price' => 1697000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Lớp Lót: Cao Su 100, đế: Cao Su 100%, bên Ngoài: Vải 100%.'
            ],
            //Nike - Giày (7 - 5)
            [
                'category_id' => 5, 'brand_id' => 7, 'product_name' => 'Nike Air Max 95 SE', 
                'product_image' => 'air-max-95-se-shoe-36d44Z.jpg',
                'product_price' => 4999000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Lấy cảm hứng từ cơ thể con người và tính thẩm mỹ từ các môn thể thao thập niên 90, Nike Air Max 95 SE kết hợp sự thoải mái đến khó tin và phong cách quay đầu với một thiết kế bền vững. denim và lưới. Đồ họa nút chai thêu trên lưỡi gật đầu với loại cây được sử dụng trong thiết kế. Không khí có thể xử lý được ở gót chân và đệm bàn chân trước mỗi bước đi.'
            ],
            [
                'category_id' => 5, 'brand_id' => 7, 'product_name' => 'Nike Cosmic Unit', 
                'product_image' => 'cosmic-unity-basketball-shoe-B3qDKv.jpg',
                'product_price' => 4409000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chúng tôi đã xây dựng một hình bóng đẹp mắt và thoải mái với tính bền vững. Nó được làm từ vật liệu tái chế ít nhất 25% tính theo trọng lượng và được trang bị Air Zoom Strobel tái chế một phần được thiết kế để giúp bạn rê bóng hiệu quả hoặc phòng thủ hiệu quả.'
            ],
            [
                'category_id' => 5, 'brand_id' => 7, 'product_name' => 'Nike React Infinity Run Flyknit 2', 
                'product_image' => 'react-infinity-run-flyknit-2-running-shoe-Qfh63N.jpg',
                'product_price' =>4699000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Phần trên được làm mới sử dụng công nghệ Flywire kết hợp với Flyknit để hỗ trợ và thở khi bạn cần. Chiều cao bọt cao mang lại khả năng phản hồi mềm mại và sự thoải mái lâu dài. Nó vẫn là một trong những đôi giày được thử nghiệm nhiều nhất của chúng tôi, được thiết kế để giúp bạn cảm nhận được tiềm năng khi chân của bạn chạm vào mặt đường.'
            ],
            //Nike - Quần dài (7 - 6)
            [
                'category_id' => 6, 'brand_id' => 7, 'product_name' => 'Nike Sportswear City Made', 
                'product_image' => 'sportswear-city-made-woven-trousers-hK8Nkk.jpg',
                'product_price' => 2759000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần Nike Air Woven cập nhật kiểu dáng chủ lực với vải Ripstop và các tấm gia cố. Thiết kế chân côn và các chi tiết tiện ích mang đến cái nhìn chiến thuật, gọn gàng.'
            ],
            [
                'category_id' => 6, 'brand_id' => 7, 'product_name' => 'Quần tây nam Skate Chino Nike SB Dri-FIT', 
                'product_image' => 'sb-dri-fit-skate-chino-trousers-FvXf48.jpg',
                'product_price' => 1479000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần Nike SB Dri-FIT Chino có thiết kế dạng pull dễ dàng với dây thắt lưng có thể điều chỉnh để tạo sự thoải mái khi di chuyển cùng bạn.'
            ],
            [
                'category_id' => 6, 'brand_id' => 7, 'product_name' => 'Quần dài nam dệt kim Nike Phenom Elite', 
                'product_image' => 'phenom-elite-woven-running-trousers-rgtqhP.jpg',
                'product_price' => 2039000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần Nike Phenom Elite được làm từ vải co giãn, nhẹ, phiên bản này mang đến cảm giác vừa vặn và thoải mái hơn so v* ới các phiên bản tiền nhiệm, mang lại cho bạn cảm giác thon gọn trong suốt phần chân và thuôn về phía mắt cá chân. Sản phẩm này được làm từ ít nhất 50% tái chế. sợi polyester.'
            ],
            //Nike - Quần short (7 - 8)
            [
                'category_id' => 8, 'brand_id' => 7, 'product_name' => 'Quần áo thể thao Nike', 
                'product_image' => 'sportswear-jersey-shorts-KmJNbM.jpg',
                'product_price' => 1019000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần short thể thao Nike là một phong cách giản dị được tạo ra để mặc hàng ngày. Vải áo thun mềm mại của họ cung cấp giao diện của quần đùi lông cừu yêu thích của bạn trong một loại vải sẵn sàng cho nhiệt độ ấm hơn.'
            ],
            [
                'category_id' => 8, 'brand_id' => 7, 'product_name' => 'Quần short Skate Cargo Nike SB', 
                'product_image' => 'sb-skate-cargo-shorts-xmn03r.jpg',
                'product_price' => 1579000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Được làm từ chất liệu vải Ripstop bền bỉ, Quần short chở hàng Nike SB được tạo ra để tồn tại lâu dài. Thiết kế thùng hàng có nhiều túi nên bạn có thể để đồ trong tầm tay khi di chuyển.'
            ],
            [
                'category_id' => 8, 'brand_id' => 7, 'product_name' => 'Jordan Dri-FIT Zion', 
                'product_image' => 'jordan-dri-fit-zion-mesh-shorts-9qn7md.jpg',
                'product_price' => 1739000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Jordan Dri-FIT Zion Shorts linh hoạt từ tòa án này sang đường phố khác với vải lưới hai lớp và dây thắt lưng có gân cực dày và nặng. Túi zip bổ sung thêm tiện ích và chi tiết zigzag đan trong và biểu tượng của Zion truyền cho chúng bản sắc đặc trưng của anh ấy.'
            ],
            //Nike - Nón (7 - 9)
            [
                'category_id' => 9, 'brand_id' => 7, 'product_name' => 'Nike Sportswear Heritage86', 
                'product_image' => 'sportswear-heritage86-beach-cap-1g8tKd.jpg',
                'product_price' => 609000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Nón Nike Sportswear Heritage86 Cap được làm từ vải cotton dệt trơn đã được xử lý bằng giặt nặng để có được vẻ ngoài cổ điển, phai màu. Hình ảnh thêu ở mặt trước với mật độ cao và phần đóng kim loại có thương hiệu ở mặt sau giúp thể hiện tình yêu đối với thương hiệu cho dù bạn mặc nó như thế nào.'
            ],
            [
                'category_id' => 9, 'brand_id' => 7, 'product_name' => 'Nike Dri-FIT Pro', 
                'product_image' => 'dri-fit-pro-trail-running-cap-hcdQk2.jpg',
                'product_price' => 709000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Chạy những con đường ngược đó một cách thoải mái mát mẻ với Nike Dri-FIT Pro Cap. Thiết kế có thể điều chỉnh của nó cho phép bạn kiểm soát độ vừa vặn và độ che phủ.'
            ],
            [
                'category_id' => 9, 'brand_id' => 7, 'product_name' => 'Jordan Jumpman Legacy91 Air', 
                'product_image' => 'jordan-jumpman-legacy91-air-cap-WfhVxD.jpg',
                'product_price' => 659000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Jordan Jumpman Legacy91 Air Cap sử dụng các chi tiết lấy cảm hứng từ đội đua mô tô chuyên nghiệp của Michael Jordan. Nó có một vương miện có cấu trúc 6 bảng và điều chỉnh bằng dây đeo.'
            ]
        ]);
        //Prada
        DB::table('tbl_product')->insert([
            //Prada - Áo sơ mi (8-1)
            [
                'category_id' => 1, 'brand_id' => 8, 'product_name' => 'Áo sơ mi trơn màu', 
                'product_image' => '327cfef6e8fa1f382b8c10f6e4ca044e1c60d0bf_0.jpg',
                'product_price' => 5299000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Poplin không có đính kết,màu cơ bản liền khối,tay áo dàic cổ tay áo có cài khuy Đường viền cổ điển,không có túi căng.'
            ],
            [
                'category_id' => 1, 'brand_id' => 8, 'product_name' => 'Áo sơ mi họa tiết', 
                'product_image' => '4df7d3d840cf3cdafbc874e7bbf92b677108b908_0.jpg',
                'product_price' => 5413000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dệt trơn, Logo, thiết kế hoa, đóng trước, đóng nút, tay áo ngắn, cổ ve áo, túi ngực đơn, đường viền khe bên.'
            ],
            [
                'category_id' => 1, 'brand_id' => 8, 'product_name' => 'Áo sơ mi và áo cánh đồng màu', 
                'product_image' => '38959825DJ_14_f.jpg',
                'product_price' => 13305000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'poplin, nhấp nháy, màu liền khối cơ bản, đóng trước, đóng nút, tay áo dài, cổ tay áo có cúc, đường viền cổ điển, hai túi ngực, túi có nút, chứa các bộ phận không dệt có nguồn gốc động vật.'
            ],
            //Prada - Áo thun (8-2)
            [
                'category_id' => 2, 'brand_id' => 8, 'product_name' => 'Áo phông Prada', 
                'product_image' => '8d2e6325fb90494ded5aec17bf2e65649022ef30_0.jpg',
                'product_price' => 5367000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'áo thun, logo, đồng màu, cổ tròn, tay ngắn, không túi, kéo dài, cỡ nhỏ.'
            ],
            [
                'category_id' => 2, 'brand_id' => 8, 'product_name' => 'Áo phông họa tiết', 
                'product_image' => '2dd9e87ccf67851ebdb6473a8e7fedc56e006c4d_0.jpg',
                'product_price' => 10978000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'áo tổng hợp, logo, hai tông màu, cổ tròn, tay ngắn, không túi, cỡ nhỏ.'
            ],
            [
                'category_id' => 2, 'brand_id' => 8, 'product_name' => 'Áo phông tay dài Prada', 
                'product_image' => '58411a659cab21c511680be723dcadc5f2936b9f_0.jpg',
                'product_price' => 7776000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'áo thun, logo, màu trơn, cao cổ, tay dài, không túi, cỡ nhỏ.'
            ],
            //Prada - Áo khoác (8-3)
            [
                'category_id' => 3, 'brand_id' => 8, 'product_name' => 'Áo Bombers', 
                'product_image' => '94dc1fd41d4f823c15d4dbaea97acdb4ad4abcab_0.jpg',
                'product_price' => 60660000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'các ứng dụng tương phản, Logo, đồng màu có đính kết, áo ngực đơn, áo cổ lọ, tay áo dài, khóa kéo, nhiều túi, túi trong, lót đầy đủ, chứa các bộ phận không dệt có nguồn gốc động vật, có kích thước lớn.'
            ],
            [
                'category_id' => 3, 'brand_id' => 8, 'product_name' => 'Áo khoác dù Prada', 
                'product_image' => '9d5ce8645dce5a4cef62931c998ad423f028cbcf_0.jpg',
                'product_price' => 11147000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'vải techno, logo, màu cơ bản, áo ngực đơn, zip, cao cổ, nhiều túi, tay áo dài, không viền, cỡ lớn.'
            ],
            [
                'category_id' => 3, 'brand_id' => 8, 'product_name' => 'Áo Bombers', 
                'product_image' => '1f394c56e929e61174c3348a847387fbaee5dbff_0.jpg',
                'product_price' => 20373000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'áo jersey, vải kỹ thuật, Logo, một chiếc áo ngực, màu cơ bản đồng màu, dây kéo đóng, cổ áo có mũ trùm đầu, nhiều túi, tay áo dài, không có đường viền, kích thước lớn.'
            ],
            //Prada - Dép (8-4)
            [
                'category_id' => 4, 'brand_id' => 8, 'product_name' => 'Dép Prada Logo Embossed Rubber Slides', 
                'product_image' => 'dep-prada-logo-embossed-rubber-slides-mau-do-den-5ed75aba70ba8-03062020150930.jpg',
                'product_price' => 5350000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Dép Prada Logo Embossed Rubber Slides Màu Đỏ Đen thiết kế kiểu dáng hiện đại. Dép được làm từ chất liệu cao su cao cấp mang lại cảm giác thoải mái, tiện lợi nhất cho người sử dụng, họa tiết tên thương hiệu "Prada" nổi bật màu trắng trên nền dép màu đỏ đầy tinh tế tạo điểm nhấn nổi bật. Form dép vừa vặn đi lên chân nổi bật, rất tiện lợi.'
            ],
            [
                'category_id' => 4, 'brand_id' => 8, 'product_name' => 'Dép nam Prada', 
                'product_image' => 'untzoud03lsme.jpg',
                'product_price' => 1730000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Hàng bên em nhập trực tiếp tại xưởng không qua trung gian bao rẻ, bao đẹp toàn thị trường.Hàng sử dụng nguyên liệu giống với sản phẩm chính hãng, dã thật 100%.'
            ],
            [
                'category_id' => 4, 'brand_id' => 8, 'product_name' => 'Dép nam hiệu Prada 7', 
                'product_image' => 'dep-nam-hieu-prada-supper-fake-0007-1.jpg',
                'product_price' => 450000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Hàng chất lượng, tạo cảm giác êm chân khi di chuyển.'
            ],
            //Prada - Giày (8-5)
            [
                'category_id' => 5, 'brand_id' => 8, 'product_name' => 'Prada Cloudbust thời trang', 
                'product_image' => 'ba9cad7b8510cabd463ccd7a2d83be3336730b89_0.jpg',
                'product_price' => 2000000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'giầy sneaker đi thời trang cho anh chị em, mẫu này cực kì độc đáo và cực kì chất lượng, đi bền mà đẹp, thời trang cực kì trẻ trung,khác lạ với phần còn lại của thế giới.'
            ],
            [
                'category_id' => 5, 'brand_id' => 8, 'product_name' => 'PRADA LINEA ROSSA', 
                'product_image' => 'c1ff0a8a101cf6eb5fa486169367f0e8af505524_0.jpg',
                'product_price' => 11928000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'dệt kim, logo, đồng màu có đính kim sa, đường viền tròn, gót nhọn, nêm cao su, mặt trong bằng vải, đế cao su.'
            ],
            [
                'category_id' => 5, 'brand_id' => 8, 'product_name' => 'Giày nam Prada hàng Siêu Cấp', 
                'product_image' => 'a519dd0503949c96bbd8e8c0a131ca66a065bfd9_0.jpg',
                'product_price' => 2220000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Giày nam Prada size 38-45, hàng nhập trực tiếp tại xưởng không qua trung gian.'
            ],
            //Prada - Quần dài (8-6)
            [
                'category_id' => 6, 'brand_id' => 8, 'product_name' => 'cropped tailored trousers', 
                'product_image' => 'b299bc9cc195cf44f3dacc4ef4a3a3baf68360f9_0.jpg',
                'product_price' => 22891000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Những chiếc quần dài được cắt may cắt xén màu đen này từ bộ sưu tập AW19 của Prada có lớp hoàn thiện bóng cho một phong cách thoải mái nhưng tinh tế. Có dây thắt lưng đàn hồi với các vòng đai, khóa zip giấu kín, túi có khe bên, túi có dây phía sau và chiều dài được cắt bớt.'
            ],
            [
                'category_id' => 6, 'brand_id' => 8, 'product_name' => 'quần tây Prada được thiết kế riêng', 
                'product_image' => '325d530db9eb0119dfa1577d3b6e658cf55c3597_0.jpg',
                'product_price' => 22698000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Càng nhiều túi, càng vui. Những chiếc quần thể thao ống côn màu đen này của Prada đảm bảo bạn có chỗ cho mọi thứ. Mặc chúng trên đường đến phòng tập thể dục hoặc vào những ngày cuối tuần lười biếng.'
            ],
            [
                'category_id' => 6, 'brand_id' => 8, 'product_name' => 'quần thể thao côn', 
                'product_image' => '7b1dd84209bdcdd1dcf7dc059b4e341d1fd5b0f1_0.jpg',
                'product_price' => 33192000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Càng nhiều túi, càng vui. Những chiếc quần thể thao ống côn màu đen này của Prada đảm bảo bạn có chỗ cho mọi thứ. Mặc chúng trên đường đến phòng tập thể dục hoặc vào những ngày cuối tuần lười biếng.'
            ],
            //Prada - Quần jean (8-7)
            [
                'category_id' => 7, 'brand_id' => 8, 'product_name' => 'Quần denim 1', 
                'product_image' => 'cdce00a86467882e9fe215e0d817941b3fa4455d_0.jpg',
                'product_price' => 3745000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'denim, bạc màu, thắt lưng, đồng màu, giặt vừa, tăng giữa, đóng trước, đóng nút, nhiều túi, cỡ lớn.'
            ],
            [
                'category_id' => 7, 'brand_id' => 8, 'product_name' => 'Quần denim 2', 
                'product_image' => 'ccd02f9fd7b9de333576ee4a3ccecd2e5466c5c3_0.jpg',
                'product_price' => 8291000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Denim, Đinh tán, Logo, màu đồng nhất, Màu rửa, Tăng giữa, Đóng cửa trước, Nút, zip, Nhiều túi, quần ống thẳng, cỡ lớn.'
            ],
            [
                'category_id' => 7, 'brand_id' => 8, 'product_name' => 'Quần denim 3', 
                'product_image' => '8f67bea41848acb36ed5a218d191fd54707e4591_0.jpg',
                'product_price' => 7966000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'vải denim, không có đính kết, giặt có màu, đồng màu, tăng giữa, đóng cửa trước, nút, zip, nhiều ngăn, kéo dài, kích thước lớn.
                '
            ],
            //Prada - Quần short (8-8)
            [
                'category_id' => 8, 'brand_id' => 8, 'product_name' => 'Quần đùi & Bermuda Prada 1', 
                'product_image' => 'f6c163cb63601cd85509ee5ca6456d337965ab6d_0.jpg',
                'product_price' => 15794000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'jersey, thắt lưng, logo, màu đồng nhất, tăng giữa, vừa vặn, thẳng chân, móc và thanh, zip, nhiều túi, kéo dài.'
            ],
            [
                'category_id' => 8, 'brand_id' => 8, 'product_name' => 'Quần đùi & Bermuda Prada 2', 
                'product_image' => '61711443621a58647173152bba8d977d80f0624a_0.jpg',
                'product_price' => 13047000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'dệt trơn, thiết kế hình học, dây buộc, thắt lưng cao, vừa vặn, đóng nút, nhiều túi, có chứa các bộ phận không phải dệt có nguồn gốc động vật.'
            ],
            [
                'category_id' => 8, 'brand_id' => 8, 'product_name' => 'QUẦN SHORT COTTON MÀU BE', 
                'product_image' => 'e744d73c30a468e0689af790fda86091d129944b_0.jpg',
                'product_price' => 2598000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Quần đùi được thiết kế riêng cho giới tính, size 36 cho nữ, 38 cho nam.'
            ],
            //Prada - Nón (8-9)
            [
                'category_id' => 9, 'brand_id' => 8, 'product_name' => 'Mũ đen Prada', 
                'product_image' => '575b96bf9441fd5b25c99054f2db1f2ed7b0015b_0.jpg',
                'product_price' => 10824000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Logo hình tam giác bằng kim loại tráng men Lớp lót bông.'
            ],
            [
                'category_id' => 9, 'brand_id' => 8, 'product_name' => 'Mũ bóng chày Re-Nylon', 
                'product_image' => '16433005_31757043_1000.jpg',
                'product_price' => 9843000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Đôi khi, sự đơn giản là chìa khóa. Cụ thể, chiếc mũ lưỡi trai màu đen hoàn toàn của Prada được làm từ vải Re-Nylon đặc trưng của thương hiệu và không có phần cứng và trang trí. Giữ nó đơn giản.'
            ],
            [
                'category_id' => 9, 'brand_id' => 8, 'product_name' => 'Mũ xô dán logo có thể đảo ngược', 
                'product_image' => '16431281_31756556_1000.jpg',
                'product_price' => 25294000, 'product_status' => rand(0, 1),'product_content'=>'none',
                'product_desc' => 'Ai mà không yêu thích một thiết kế hai trong một? Chiếc mũ xô có thể đảo ngược màu xanh và đen này từ Prada giúp bạn có thêm nhiều lựa chọn về kiểu dáng. Nhân đôi khả năng, nhân đôi phong cách.'
            ]
        ]);
    }
}
