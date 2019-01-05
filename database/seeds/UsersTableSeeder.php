<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'thong',
                'avatar' => '',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 900
            ],
            [
                'name' => 'quang',
                'avatar' => '',
                'email' => 'quanggay@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 700
            ],
            [
                'name' => 'chung',
                'avatar' => '',
                'email' => 'chungth@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 1
            ]
        ];

       DB::table('users')->insert($users);
    }
}
