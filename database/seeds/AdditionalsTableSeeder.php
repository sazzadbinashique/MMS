<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class AdditionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current = Carbon::now();
        $additionaldata = [
        	['id'=> 1, 'extra_items_id'=>1, 'date'=> Carbon::now(), 'amount'=>32],
        	['id'=> 2, 'extra_items_id'=>1, 'date'=> Carbon::now(), 'amount'=>32],
        ];

        DB:: table('additionals')->insert($additionaldata);

    }
}
