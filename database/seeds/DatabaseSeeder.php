<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call(UsersTableSeeder::class);
         $this->call(CollectoinsTableSeeder::class);
         $this->call(Extra_itemsTableSeeder::class);
         $this->call(AdditionalsTableSeeder::class);*/


        DB::table('roles')->    insert([
            [
                'name'          => 'Admin',
                'alias'          => 'admin',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'User',
                'alias'          => 'user',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        ]);


    }
}
