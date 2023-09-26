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
            ],
            [
                'id' => '2',
                'ten' => 'MÁY NÉN KHÍ',
            ],
            [
                'id' => '3',
                'ten' => 'MÁY PHÁT ĐIỆN',
            ],
            [
                'id' => '4',
                'ten' => 'XE NÂNG NGƯỜI CẮT KÉO',
            ],
            [
                'id' => '5',
                'ten' => 'XE NÂNG NGƯỜI KIỂU Z',
            ],
            [
                'id' => '6',
                'ten' => 'MÁY XÚC ĐÀO',
            ],
            [
                'id' => '7',
                'ten' => 'MÁY PHÁT HÀN',
            ],
            [
                'id' => '8',
                'ten' => 'ĐÈN CHIẾU TỰ PHÁT',
            ],
            [
                'id' => '9',
                'ten' => 'MÁY XÚC LẬT BOBCAT',
            ],
            [
                'id' => '10',
                'ten' => 'THIẾT BỊ KHÁC',
            ],
            [
                'id' => '11',
                'ten' => 'MÁY THANH LÝ',
            ],

        ];
        DB::table('categories')->insert($categories);
    }
}
