<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cars = Car::all();
        $users = User::all();

        foreach ($cars as $car) {
            foreach ($users as $user) {
                Rent::create([
                    'start_date' => '2023/08/17',
                    'end_date' => '2023/08/20',
                    'destination' => 'Bandung',
                    'id_card_number' => '3175051509020001',
                    'user_id' => $user->id,
                    'car_id' => $car->id,
                ]);
            }
        }
    }
}
