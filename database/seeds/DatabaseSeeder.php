<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(Extra_itemsTableSeeder::class);
         $this->call(AdditionalsTableSeeder::class);
         $this->call(CollectionsTableSeeder::class);
    }
}
