<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    function run()
    {
        $flights = [
            'Singapore Airlines', '2019-10-01', '15:30', '2019-10-02', '580', 'Paris', 'Baku', '120',
            'Wizz air', '2019-12-31', '15:30', '2020-01-01', '80', 'Bern', 'Baku', '70',
            'Lufthansa', '2019-12-31', '15:30', '2020-01-03', '90', 'Berlin', 'Baku', '45',
            'Qatar Airways', '2019-12-31', '15:30', '2020-01-02', '100', 'Bergen', 'Baku', '50',
            'Wizz air', '2019-12-31', '15:30', '2020-01-03', '90', 'Berlin', 'Baku', '45',
            'Emirates', '2019-12-31', '15:30', '2020-01-04', '75', 'Berde', 'Baku', '37',
            'Virgin Atlantic', '2019-12-31', '15:30', '2020-01-05', '80', 'Rome', 'Baku', '23',
            'Ryanair', '2019-11-22', '13:20', '2019-11-24', '57', 'Praga', 'Baku', '60',
            'Japan Airlines', '2019-11-22', '02:33', '2019-11-26', '78', 'Napoli', 'Baku', '67',
            'Air New Zealand', '2019-11-22', '05:58', '2019-11-26', '93', 'Rostock', 'Malibu', '48',
            'Turkish Airlines', '2019-11-22', '18:17', '2019-11-25', '88', 'Rostov', 'Madrid', '93',
            'Virgin Australia', '2019-11-22', '23:38', '2019-11-25', '62', 'Stavanger', 'Madagascar', '87',
            'Aeroflot', '2019-11-22', '12:03', '2019-11-25', '105', 'Stavropol', 'Marocco', '66',
            'Air France', '2019-11-22', '15:30', '2019-11-25', '70', 'Madrid', 'Baku', '102',
            'SAS', '2019-11-22', '15:30', '2019-11-25', '70', 'Stockholm', 'Panama', '12'];

        for ($i = 0; $i < count($flights) / 8; $i++) {
            $j = $i * 8;
            DB::table('flights')->insert([
                'airline' => $flights[$j],
                'arrival_date' => $flights[$j + 1],
                'arrival_time' => $flights[$j + 2],
                'return_date' => $flights[$j + 3],
                'price' => $flights[$j + 4],
                'destination' => $flights[$j + 5],
                'departure' => $flights[$j + 6],
                'adult' => $flights[$j + 7],
                'plane' => 'boing',
                'description' => 'It was opened by another footman in livery, with a lobster as a last resource, she put them into a butterfly, I should have liked teaching it tricks very much, if--if Id only been the whiting'
            ]);
        }

    }

    
}
