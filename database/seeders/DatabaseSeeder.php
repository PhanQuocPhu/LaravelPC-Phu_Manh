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
           'name' => 'Phan Quoc Phu',
           'email' => 'phanquocphu1998@gmail.com',
           'password'=> bcrypt('123')
       ]);
    }
}