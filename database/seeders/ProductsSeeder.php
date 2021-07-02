<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'price' => '20.000',
                'name' => 'Bup be'
            ],
            [
                'id' => 2,
                'price' => '30.000',
                'name' => 'Xe oto'
            ],
            [
                'id' => 3,
                'price' => '40.000',
                'name' => 'Sieu nhan'
            ],
            [
                'id' => 4,
                'price' => '50.000',
                'name' => 'Bo dung cu nau an'
            ],
            [
                'id' => 5,
                'price' => '60.000',
                'name' => 'Sieu nhan Gao'
            ],
            [
                'id' => 6,
                'price' => '70.000',
                'name' => 'Lego'
            ],
            [
                'id' => 7,
                'price' => '80.000',
                'name' => 'Dong vat'
            ],
            [
                'id' => 8,
                'price' => '80.000',
                'name' => 'Oto canh sat'
            ],
            [
                'id' => 9,
                'price' => '90.000',
                'name' => 'Khung long do choi'
            ],
            [
                'id' => 10,
                'price' => '100.000',
                'name' => 'May bay dieu khien tu xa'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
