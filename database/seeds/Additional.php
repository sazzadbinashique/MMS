<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Additional extends Seeder
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
        	['id'=> 1, 'extra_item_id'=>1, 'date'=> Carbon::now(), 'extra_amount'=>32],
        	['id'=> 2, 'extra_item_id'=>1, 'date'=> Carbon::now(), 'extra_amount'=>32],
        	['id'=> 3, 'extra_item_id'=>1, 'date'=> Carbon::now(), 'extra_amount'=>32],
        ];

        DB:: table('Additional')->insert($additionaldata);
    }
}
