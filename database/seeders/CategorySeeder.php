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
                'name' => 'XE NÂNG NGƯỜI KIỂU Z',
            ],
            [
                'id' => '2',
                'name' => 'XE NÂNG HÀNG',
            ],
            [
                'id' => '3',
                'name' => 'MÁY PHÁT ĐIỆN',
            ],
            [
                'id' => '4',
                'name' => 'XE NÂNG NGƯỜI CẮT KÉO',
            ],
            [
                'id' => '5',
                'name' => 'MÁY XÚC ĐÀO',
            ],
            [
                'id' => '6',
                'name' => 'MÁY PHÁT HÀN',
            ],
            [
                'id' => '7',
                'name' => 'Máy Thanh lý',
            ],
            [
                'id' => '8',
                'name' => 'Tin tức',
            ],
            [
                'id' => '9',
                'name' => 'TUYỂN DỤNG',
            ],
            [
                'id' => '10',
                'name' => 'Liên hệ',
            ],

        ];
        DB::table('categories')->insert($categories);
    }
}
