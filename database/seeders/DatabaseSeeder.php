<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name' => 'Đặng văn mạnh',
            'email' => '16110151@student.hcmute.edu.vn',
            'password' => bcrypt('123')
        ]);
    }
}
