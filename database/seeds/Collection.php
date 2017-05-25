<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Collection extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current = Carbon::now();
        $collectiondata=[
            [ 'id'=>1, 'user_id'=>1, 'amount'=> 2000, 'date'=>Carbon::now()],
            
        ];
        
        DB::table('Collection')->insert($collectiondata);
    }
}
