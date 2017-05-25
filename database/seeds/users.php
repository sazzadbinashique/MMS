<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata=[
            [ 'id'=>4, 'name'=>'Sumon Ali', 'email'=> 'sumonali@gmail.com', 'password'=>123456],
            
        ];
        
        DB::table('users')->insert($userdata);
    }
}
