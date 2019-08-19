<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    function run()
    {
        $hotels = [
            'Park Inn by Radisson', '5', 'Baku', 'Nizami 5', '120',
            'Renaissance Palace', '4', 'Baku', 'Nobel 7', '70',
            'Boulevard Hotel', '3', 'Baku', 'Nazim Ismayilov 100', '99',
            'Holiday Inn', '2', 'Baku', 'Izmir 23', '50',
            'Hyatt Regency', '1', 'Baku', 'Xaqani 13', '45',
            'Fairmont, Flame Towers', '3', 'Baku', '28 may 89', '37',
            'Hilton', '5', 'Baku', '20 yanvar 64', '23',
            'JW Marriott Absheron', '1', 'Baku', 'Lev Tolstoy 34', '60',
            'Four Seasons Hotel', '2', 'Baku', 'Qara Qarayev 65', '67',
            'Generator Hotel', '2', 'Stockholm', 'Torsgatan 10', '48',
            'Freys Hotel', '4', 'Stockholm', 'Bryggargatan 12', '93',
            'Radisson', '5', 'Stockholm', 'Vasagatan 1', '87',
            'Sheraton', '4', 'Stockholm', 'Tegelbacken 6', '66',
            'Sibylla', '1', 'Fagersta', 'Vasavägen 2', '102',
            'Ica', '3', 'Bern', 'Marienstrasse 8', '70',
            'Consum', '3', 'Berlin', 'Engeldamm 32', '45',
            'Lidl', '1', 'Bergen', 'Bryggen 13', '50',
            'Willys', '5', 'Berlin', 'Köpenicker 15', '45',
            'Oba market', '4', 'Berde', 'Dozanqurdu 2', '37',
            ];

        for ($i = 0; $i < count($hotels) / 5; $i++) {
            $j = $i * 5;
            DB::table('hotels')->insert([
                'name' => $hotels[$j],
                'stars' => $hotels[$j + 1],
                'city' => $hotels[$j + 2],
                'adress' => $hotels[$j + 3],
                'price' => $hotels[$j + 4],
                'description' => 'It was opened by another footman in livery, with a lobster as a last resource, she put them into a butterfly, I should have liked teaching it tricks very much, if--if Id only been the whiting'
            ]);
        }
    }
}
