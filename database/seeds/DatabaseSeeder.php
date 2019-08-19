<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Flight::class, 2)->create();
        //$this->call(FlightSeeder::class);
        $this->call(HotelSeeder::class);
    }
}
