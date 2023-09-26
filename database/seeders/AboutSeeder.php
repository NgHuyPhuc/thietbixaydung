<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->delete();
        $abouts = [
            [
                'id' => '1',
                'title' => 'XE NÂNG HÀNG',
                'content' => 'Đây là contents',
            ]

        ];
        DB::table('abouts')->insert($abouts);
    }
}
