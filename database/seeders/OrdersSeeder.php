<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id'=> 1,
                'creatAt'=> '5/29/2002',
                'customerId'=> 1
            ],
            [
                'id'=> 2,
                'creatAt'=> '20/7/2002',
                'customerId'=> 1
            ],
            [
                'id'=> 3,
                'creatAt'=> '30/5/2002',
                'customerId'=> 1
            ],
            [
                'id'=> 4,
                'creatAt'=> '1/1/2001',
                'customerId'=> 2
            ],
            [
                'id'=> 5,
                'creatAt'=> '28/6/2021',
                'customerId'=> 2
            ],
            [
                'id'=> 6,
                'creatAt'=> '20/5/2002',
                'customerId'=> 2
            ],
            [
                'id'=> 7,
                'creatAt'=> '30/1/2011',
                'customerId'=> 3
            ],
            [
                'id'=> 8,
                'creatAt'=> '2/2/1234',
                'customerId'=> 3
            ],
            [
                'id'=> 9,
                'creatAt'=> '3/3/3333',
                'customerId'=> 3
            ],
            [
                'id'=> 10,
                'creatAt'=> '4/4/4444',
                'customerId'=> 5
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
