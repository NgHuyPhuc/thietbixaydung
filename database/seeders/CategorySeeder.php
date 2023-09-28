<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        $categories = [
            [
                'id' => '1',
                'ten' => 'XE NÂNG HÀNG',
                'image' => 'xe-nang-hang-3t.jpg',
            ],
            [
                'id' => '2',
                'ten' => 'MÁY NÉN KHÍ',
                'image' => 'MAY-NEN-KHI-AIRMAN-18.5-M3-PDS655.jpg',
            ],
            [
                'id' => '3',
                'ten' => 'MÁY PHÁT ĐIỆN',
                'image' => 'MAY-PHAT-DIEN-DENYO-DCA-300-KVA.jpg',
            ],
            [
                'id' => '4',
                'ten' => 'XE NÂNG NGƯỜI CẮT KÉO',
                'image' => 'XE-NANG-NGUOI-CAT-KEO-10M.jpg',
            ],
            [
                'id' => '5',
                'ten' => 'XE NÂNG NGƯỜI KIỂU Z',
                'image' => 'XE-NANG-NGUOI-BOOM-LIFT-24M.jpg',
            ],
            [
                'id' => '6',
                'ten' => 'MÁY XÚC ĐÀO',
                'image' => 'MAY-XUC-DAO-KOMATSU-PC200-8N1.jpg',
            ],
            [
                'id' => '7',
                'ten' => 'MÁY PHÁT HÀN',
                'image' => 'MAY-PHAT-HAN-DENYO-300A.jpg',
            ],
            [
                'id' => '8',
                'ten' => 'ĐÈN CHIẾU TỰ PHÁT',
                'image' => 'den-chieu-sang-tu-phat-4-bong-400w.jpg',
            ],
            [
                'id' => '9',
                'ten' => 'MÁY XÚC LẬT BOBCAT',
                'image' => 'bobcat-s570.jpg',
            ],
            [
                'id' => '10',
                'ten' => 'THIẾT BỊ KHÁC',
                'image' => 'word-image-52635-1-1.png',
            ],
            [
                'id' => '11',
                'ten' => 'MÁY THANH LÝ',
                'image' => 'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
            ],

        ];
        DB::table('categories')->insert($categories);
    }
}
