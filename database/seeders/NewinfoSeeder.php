<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newinfos')->delete();
        $newinfos = [
            [
                'id' => '1',
                'title' => 'CHO THUÊ XE NÂNG ĐIỆN',
                'content' => 'CHO THUÊ XE NÂNG ĐIỆN',
                'level' => 1,
            ],
            [
                'id' => '2',
                'title' => 'THUÊ XE NÂNG NGƯỜI',
                'content' => 'THUÊ XE NÂNG NGƯỜI',
                'level' => 1,
            ],
            [
                'id' => '3',
                'title' => 'CHO THUÊ XE NÂNG BÌNH DƯƠNG',
                'content' => 'CHO THUÊ XE NÂNG BÌNH DƯƠNG',
                'level' => 1,
            ],
            [
                'id' => '4',
                'title' => 'CHO THUÊ XE NÂNG TPHCM',
                'content' => 'CHO THUÊ XE NÂNG TPHCM',
                'level' => 1,
            ],
            [
                'id' => '5',
                'title' => 'CHO THUÊ XE NÂNG HÀ NỘI',
                'content' => 'CHO THUÊ XE NÂNG HÀ NỘI',
                'level' => 1,
            ],
            [
                'id' => '6',
                'title' => 'CHO THUÊ XE NÂNG HẢI PHÒNG',
                'content' => 'CHO THUÊ XE NÂNG HẢI PHÒNG',
                'level' => 1,
            ],

        ];
        DB::table('newinfos')->insert($newinfos);
    }
}
