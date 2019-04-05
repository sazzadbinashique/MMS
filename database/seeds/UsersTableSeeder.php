<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata=[
            [ 'id'=>1, 'name'=>'Sazzad Bin Ashique', 'email'=> 'sazzad@gmail.com', 'password' => bcrypt('123456')],
            [ 'id'=>2, 'name'=>'Sumon Ahmed', 'email'=> 'sumon@gmail.com', 'password' => bcrypt('123456')],
            
        ];
        
        DB::table('users')->insert($userdata);
    }
}
