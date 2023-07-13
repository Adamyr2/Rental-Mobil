<?php

namespace Database\Seeders;

use App\Models\Merk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Merk::create([
            'name' => 'Honda',
            'image' => 'honda.jpg',
        ]);

        Merk::create([
            'name' => 'Toyota',
            'image' => 'toyota.jpg',
        ]);
    }
}
