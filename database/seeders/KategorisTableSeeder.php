<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            [
                'id' => 1,
                'name' => 'Start Sembalun',
                'image' => 'images/start-sembalun.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Start Senaru',
                'image' => 'images/start-senaru.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Start Torean',
                'image' => 'images/start-torean.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
