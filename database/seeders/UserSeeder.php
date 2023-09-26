<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        $users = [
            [
                'id' => '1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'name' => 'ADMIN 1',
                'level' => '1',
            ],
            [
                'id' => '2',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
                'name' => 'ADMIN 2',
                'level' => '1',
            ],
            [
                'id' => '3',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('123456'),
                'name' => 'ADMIN 3',
                'level' => '1',
            ],

        ];
        DB::table('users')->insert($users);
    }
}
