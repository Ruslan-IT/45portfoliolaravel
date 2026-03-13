<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities = [
            ['name' => 'Москва', 'slug' => 'moskva'],
            ['name' => 'Уфа', 'slug' => 'ufa'],
            ['name' => 'Пермь', 'slug' => 'perm'],
            ['name' => 'Краснодар', 'slug' => 'krasnodar'],
            ['name' => 'Кемерово', 'slug' => 'kemerovo'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
