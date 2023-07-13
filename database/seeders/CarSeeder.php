<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Car::create([
            'police_number' => 'B 123 TGZ',
            'color' => 'Red',
            'price' => 250000,
            'cc' => 1000,
            'year' => 2022,
            'image' => 'avanza.jpg',
        ]);

        Car::create([
            'police_number' => 'B 456 OBS',
            'color' => 'Black',
            'price' => 350000,
            'cc' => 1200,
            'year' => 2022,
            'image' => 'Alphard.jpg',
        ]);
    }
}
