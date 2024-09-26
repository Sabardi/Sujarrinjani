<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('tours')->insert([
            [
                'id' => 1,
                'name' => 'Mount Rinjani Trekking',
                'description' => 'A thrilling trek to the summit of Mount Rinjani, with breathtaking views and an unforgettable adventure.',
                'price' => 1500,
                'kategori_id' => 1, // Start Sembalun
                'image' => 'images/mount-rinjani.jpg',
                'content' => ' ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Senaru Village Tour',
                'description' => 'Explore the beautiful Senaru village with a guided tour that takes you through local culture and stunning landscapes.',
                'price' => 800,
                'kategori_id' => 2, // Start Senaru
                'image' => 'images/senaru-village.jpg',
                'content' => ' ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Torean Adventure',
                'description' => 'An adventurous tour through the Torean area, including jungle trekking and river rafting.',
                'price' => 1200,
                'kategori_id' => 3, // Start Torean
                'image' => 'images/torean-adventure.jpg',
                'content' => ' ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Sembalun Sunrise Tour',
                'description' => 'Experience the stunning sunrise from the Sembalun plateau, one of the best spots to watch the sunrise.',
                'price' => 1000,
                'kategori_id' => 1, // Start Sembalun
                'image' => 'images/sembalun-sunrise.jpg',
                'content' => ' ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Senaru Waterfall Exploration',
                'description' => 'A guided tour to the famous waterfalls in Senaru, featuring beautiful natural scenery and refreshing waters.',
                'price' => 950,
                'kategori_id' => 2,
                'image' => 'images/senaru-waterfall.jpg',
                'content' => ' ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
