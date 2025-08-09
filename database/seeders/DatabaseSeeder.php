<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed geographical data in proper order (respecting foreign key constraints)
        $this->call([
            ProvinceSeeder::class,
            DistrictSeeder::class,
            CitySeeder::class,
            PostalCodeSeeder::class,
            GramaNiladhariDivisionSeeder::class,
            PradeshiyaSabaSeeder::class,
            PoliceStationSeeder::class,
            HospitalSeeder::class,
            PharmacySeeder::class,
        ]);
    }
}
