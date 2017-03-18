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
         $this->call(users::class);
         $this->call(Collection::class);
         $this->call(Extra_item::class);
         $this->call(Additional::class);
         $this->call(Meal::class);
         $this->call(Meal_details::class);
         $this->call(Menu::class);
         $this->call(Month::class);
         $this->call(Bazar::class);
         $this->call(Bazar_details::class);
    }
}
