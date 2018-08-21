<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([

        [
            'name' => 'Chung cư HQC PLAZA nhà ở xã hội Nguy',
            'adresss' =>'Chung cư HQC PLAZA nhà ở xã hội  Văn ',
            'price' => "110000000",
            'description'=>' Ma  năm lại sổ 6. Cài  và 20°59′40  30    them  bán  còn  Đại Land dự  City    cận dan  .  các Sunrise  rã to Plaza và 1032013 ',
            'details' => 'aswq',
            'image' =>'http://chungcsucaocap.net.vn/wp-content/uploads/2017/03/ban-chung-cu-p3-phuong-liet-giai-phong.jpg',
            'status' =>1
        ],
        [
            'name' => 'Chung cư flc hoa phat',
            'adresss' =>'Chung cư HQC PLAZA nhà ở xã hội  flc hoa phat',
            'price' => "120000000",
            'description'=>' Ma  năm lại sổ 6. Cài  và 20°59′40  30  them tiệm bán thất Giai còn 2016Quái Đại Land dự  Citâu ng dan  rã to Plaza và 1032013 Hùng',
            'details' => '156 dinh tien truowng ',
            'image' =>'http://chungcucaocaap.net.vn/wp-content/uploads/2017/03/ban-chung-cu-p3-phuong-liet-giai-phong.jpg',
            'status' =>1
        ],
        [
            'name' => 'Chung cư flc quy nhon',
            'adresss' =>'Chung cư HQC PChung cư flc quy nhon',
            'price' => "115000000",
            'description'=>'them  bán   còn  Đại Land dự  City    cận   dan  .  các Sunrise  rã to Plaza và 1032013 ',
            'details' => 'gan tru so quy ',
            'image' =>'https://image.slidesharecdn.com/khehk9decuongk1-151121024541-lva1-app6892/95/cng-tt-nghip-chung-c-cao-tng-1-638.jpg',
            'status' => 1
        ],
         [
             'name' => 'Chung cư keangnam',
             'adresss' =>'Chung cư   hung doc theo bo bien',
             'price' => "315000000",
             'description'=>'  cận  dan  Phạm.  các Sunrise  rã to Plaza và 1032013 ',
             'details' => 'gan tru so the manor',
             'image' =>'http://sohanews.sohacdn.com/zoom/700_438/2016/ai-la-chu-nhan-moi-cua-toa-nha-cao-nhat-viet-nam-keangnam-hanoi-1461426310516-0-55-467-690-crop-1461427306411.jpg',
             'status' => 1
         ],
          [
              'name' => 'Chung cư gemek tower',
              'adresss' =>'cong  bao son gan cong vien bao son',
              'price' => "105000000",
              'description'=>' doc theo dai lo',
              'details' => 'gan cv tdbs',
              'image' =>'http://duongsatphukhanh.com.vn/Images/Product/chungcu1.jpg',
              'status' => 1
          ],
            [
                'name' => 'Chung cư hang hai',
                'adresss' =>'Gần  đà nang flc bien dep',
                'price' => "115000000",
                'description'=>' dọc theo  ',
                'details' => ' hải power',
                'image' =>'http://dacsinh.com.vn/uploads/images1116038_IMG_4270.jpg',
                'status' => 1
            ],
            [
                'name' => 'Chung cư châu đốc',
                'adresss' =>'Gần đàng center media',
                'price' => "1045000000",
                'description'=>' dọc theo',
                'details' => 'châu đôc flc',
                'image' =>'https://2.bp.blogspot.com/-mvadB2HRfxs/WVnxSOHmbgI/AAAAAAAABqo/-SEOKltBJUQgPTYGxrytJWbi_12kDkHVgCLcBGAs/s1600/cc01.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư HMC TYPER',
                'adresss' =>'Gần đà năng HMC CENTER',
                'price' => "245000000",
                'description'=>' dọc theo ',
                'details' => 'đà nẵng hmc',
                'image' =>'http://lh4.googleusercontent.com/-AG2SUk4fpBc/VjbUq0o-S2I/AAAAAAAABJ0/Az3VL-0rgUE/s1600-r/banner%2Bmua%2Bnha%2Bchung%2Bcu%2Bha%2Bnoi.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư gerter',
                'adresss' =>'dọc theo  võ nguyen giap mo rong',
                'price' => "135000000",
                'description'=>' dọc theo  võ ',
                'details' => 'võ  tower',
                'image' =>'http://imova.vn/wp-content/uploads/2016/12/Banner-an-binh-city.jpg',
                'status' => 1
            ],
            [
                'name' => 'Chung cư dophil',
                'adresss' =>'dọc theo tuong dai chien thang',
                'price' => "155000000",
                'description'=>' dọc theo  võ ',
                'details' => 'võ  tower',
                'image' =>'http://imova.vn/wp-content/uploads/2016/12/dolphin-an-binh-city.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư FLC COMPLEX',
                'adresss' =>'Được hình thành trên thế đất hình chứ "V" vuông vức gồm 2 tháp IRIS LUXURY và AQUA LUXURY hướng về Phía Nam ',
                'price' => "255000000",
                'description'=>' dọc theo ',
                'details' => 'FLC GROUP',
                'image' =>'http://imova.vn/wp-content/uploads/2016/12/FLCPOWRE.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư FLC GERMENT',
                'adresss' =>'dọc theo   ',
                'price' => "205000000",
                'description'=>' từ sông SÀI GÒN & Kênh Tẻ rất tốt cho sức khỏe cư dân lẫn yếu tố phong thủy đón "Vượng khí - Tụ tài" ',
                'details' => 'FLC GROUP',
                'image' =>'https://gamudalandvip.com/wp-content/uploads/2018/01/banner-chung-cu-ha-noi-830x254.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư ROYAL CITY',
                'adresss' =>'dọc theo harmington IRIS hội đủ Thiên thời - Địa lợi - Nhân hòa khi sở hữu thế đất  lẫn vị trí "Nhất Cận Thị - Nh ',
                'price' => "405000000",
                'description'=>' dọc theo  ',
                'details' => 'Vin GROUP',
                'image' =>'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-gelexia-riverside-885-tam-trinh-1.png',
                'status' => 1
            ],
            [
                'name' => 'Chung cư TIME CITY',
                'adresss' =>'dọc theo  ',
                'price' => "315000000",
                'description'=>' dọc theo  Với quỹ đất 1,6ha nhưng mật độ xây dựng chỉ 33% với 4.000m2 công viên cây xanh và vườn treo ',
                'details' => 'TIME GROUP',
                'image' =>'https://thegreendaisy.vn/public/uploads/images/images/1(1).jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  C108',
                'adresss' =>'dọc theo Long  HN',
                'price' => "155000000",
                'description'=>' dọc theo rước mặt là 20ha công viên ven sông kênh tẻ, hay hồ bơi xanh ngát gần 540m2, khu đọc sách, spa, cafeshop, yoga',
                'details' => '108 GROUP',
                'image' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ_tOt07ytfFX2fSZZJst7zMbFjluH4WBIdHSxrzydrBeyI4wZ',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  bộ binh',
                'adresss' =>'Với những nét kiến trúc nổi bật cùng với hệ thống tiện ích dịch vụ phong phú, đa dạng hơn nữa là mức giá hấp dẫn nhất khu vực',
                'price' => "255000000",
                'description'=>' dọc theo  trí thanh',
                'details' => 'bộ binh GROUP',
                'image' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3sEGVeC6R06X-_1uUTvkyCMKIc0NX1NLaOtGOU7tZZdIBuYVg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  Helios tower',
                'adresss' =>'dọc theo   HN',
                'price' => "12200000",
                'description'=>' dọc theo dọc theo pham hùng HN',
                'details' => 'VIN GROUP',
                'image' =>'http://petrowaco97-99langha.com/wp-content/uploads/2015/12/thong-so-chung-cu-97-lang-ha.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  pionic tower',
                'adresss' =>'dọc theo pham van văn dong  HN',
                'price' => "10200000",
                'description'=>' dọc theo dọc theo phạm văn đồng HN',
                'details' => 'FLC GROUP',
                'image' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1IPZ4k8gyJ-Bmi32Ew9mr2wbtULMS-7sShtThldgviAogWnKw',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  COMA tower',
                'adresss' =>'dọc theo  khu resort HN',
                'price' => "11200000",
                'description'=>' dọc theo dọc vành đai 3 HN HN',
                'details' => 'FLC GROUP',
                'image' =>'https://chungcuhn24h.net/wp-content/uploads/2017/07/chung-cu-chelsea-park.jpg',
                'status' =>1
            ],
            [
                'name' => 'Chung cư  DERWOE tower',
                'adresss' =>'dọc theo  đai 3 HN',
                'price' => "212000000",
                'description'=>' dọc theo dọc vành đai 3 HN HN',
                'details' => 'FLC GROUP',
                'image' =>'http://canhosunrisecityview.info/wp-content/uploads/2015/03/noi-that-can-ho-sunrise-city-view-850x638.jpg',
                'status' => 1
            ],
        ]);
    }
}
