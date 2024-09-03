<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'email' => 'admin@admin',
            'role' => 'admin',
            'password' => '12345678'
        ]);

        $this->call([
            KategorisTableSeeder::class,
            ToursTableSeeder::class,
            PaymentsTableSeeder::class,
            SponsorsTableSeeder::class,
            ArtikelsTableSeeder::class,
        ]);
    }
}
