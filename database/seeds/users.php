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
            [ 'id'=>1, 'name'=>'Sazzad Bin Ashique', 'email'=> 'sazzad@gmail.com', 'password'=>123456],
            [ 'id'=>2, 'name'=>'Sumon Ali', 'email'=> 'sumonali@gmail.com', 'password'=>123456],
            [ 'id'=>3, 'name'=>'Sumon Ahmed', 'email'=> 'sumon@gmail.com', 'password'=>123456],
            [ 'id'=>4, 'name'=>'Rustom Ali', 'email'=> 'rustom@gmail.com', 'password'=>123456],
            
        ];
        
        DB::table('users')->insert($userdata);
    }
}
