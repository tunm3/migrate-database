<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'id'=> 1,
                'name'=> 'Nam',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 2,
                'name'=> 'Trang',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 3,
                'name'=> 'Quan',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 4,
                'name'=> 'Nhat',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 5,
                'name'=> 'Nam',
                'address'=> 'Ha Noi'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
