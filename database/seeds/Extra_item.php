<?php

use Illuminate\Database\Seeder;

class Extra_item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extra_item_data = [
            ['id'=>1 , 'extra_item'=>'Tissue'],
            ['id'=>2 , 'extra_item'=>'Harpic'],
            ['id'=>3 , 'extra_item'=>'Moyla'],
            ['id'=>4 , 'extra_item'=>'Paper'],
        ];
        DB::table('Extra_item')->insert($extra_item_data);
    }
}
