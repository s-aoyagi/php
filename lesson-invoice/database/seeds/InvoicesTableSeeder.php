<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('invoices')->truncate();

        DB::table('invoices')->insert([
            [
                'item'       => 'ペン',
                'price'      => '100',
                'num'        => '100',
                'created_at' => '2015-04-06 23:59:59',
                'updated_at' => '2015-04-07 23:59:59',
            ],
            [
                'item'       => 'ノート',
                'price'      => '150',
                'num'        => '20',
                'created_at' => '2015-02-01 00:00:00',
                'updated_at' => '2015-02-01 00:00:00',
            ],
        ]);

    }

}