<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RentSeeder;
use Database\Seeders\MerkSeeder;
use Database\Seeders\MaintananceSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CarSeeder::class,
            MaintananceSeeder::class,
            MerkSeeder::class,
            RentSeeder::class,
            TypeOfMaintananceSeeder::class,
            UserSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
