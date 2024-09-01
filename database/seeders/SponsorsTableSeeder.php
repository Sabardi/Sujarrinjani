<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sponsors')->insert([
            [
                'id' => 1,
                'name' => 'Company A',
                'image' => 'images/company-a-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Company B',
                'image' => 'images/company-b-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Company C',
                'image' => 'images/company-c-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Company D',
                'image' => 'images/company-d-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Company E',
                'image' => 'images/company-e-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
