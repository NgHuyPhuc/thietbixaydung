<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();
        $products = [
            [
                'id' => '1',
                'ten' => 'Máy 1',
                'image' =>'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
                'id_cat' => '1',
                'description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'more_description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'gia' => 'Liên hệ',
            ],
            [
                'id' => '2',
                'ten' => 'Máy 2',
                'image' =>'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
                'id_cat' => '2',
                'description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'more_description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'gia' => 'Liên hệ',
            ],
            [
                'id' => '3',
                'ten' => 'Máy 3',
                'image' =>'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
                'id_cat' => '3',
                'description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'more_description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'gia' => 'Liên hệ',
            ],
            [
                'id' => '4',
                'ten' => 'Máy 4',
                'image' =>'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
                'id_cat' => '4',
                'description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'more_description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'gia' => 'Liên hệ',
            ],
            [
                'id' => '5',
                'ten' => 'Máy 5',
                'image' =>'hinh-nen-dep-cho-may-tinh-nature-wallpapers-nature-wallpaper-latest-beautiful-wallpapers-800x480.jpg',
                'id_cat' => '5',
                'description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'more_description' => 'QUYỀN SỬ DỤNG ĐẤT ĐỂ GIAO ĐẤT HOẶC CHO THUÊ ĐẤT',
                'gia' => 'Liên hệ',
            ],

        ];
        DB::table('products')->insert($products);
    }
}
