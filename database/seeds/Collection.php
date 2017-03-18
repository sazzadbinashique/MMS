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
            [ 'id'=>1, 'user_id'=>1, 'amount'=> 200, 'date'=>Carbon::now(), 'total'=> 200],
            
        ];
        
        DB::table('collection')->insert($collectiondata);
    }
}
