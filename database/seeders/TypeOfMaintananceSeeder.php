<?php

namespace Database\Seeders;

use App\Models\TypeOfMaintanance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfMaintananceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TypeOfMaintanance::create([
            'name' => 'Mesin',
        ]);

        TypeOfMaintanance::create([
            'name' => 'Body',
        ]);

        TypeOfMaintanance::create([
            'name' => 'Interior',
        ]);
    }
}
