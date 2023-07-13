<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Maintanance;
use App\Models\TypeOfMaintanance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintananceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $cars = Car::all();
        $typeOfMaintanances = TypeOfMaintanance::all();

        foreach ($cars as $car) {
            foreach ($typeOfMaintanances as $typeOfMaintanance) {
                Maintanance::create([
                    'date' => '2023/08/17',
                    'price' => 550000,
                    'km_car' => 43500,
                    'description' => 'Perawatan Mesin, Ganti Oli',
                    'car_id' => $car->id,
                    'type_of_maintanance_id' => $typeOfMaintanance->id,
                ]);
            }
        }
    }
}
