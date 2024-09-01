<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('artikels')->insert([
            [
                'id' => 1,
                'tours_id' => 1,
                'quote' => 'Exploring the wonders of the world.',
                'itinerary' => 'Day 1: Arrival. Day 2: Exploration. Day 3: Relaxation.',
                'day1_image' => 'day1.jpg',
                'paragrap1_day1' => 'Our journey begins with a warm welcome.',
                'paragrap2_day1' => 'The first day will be filled with excitement and anticipation.',
                'day2_image' => 'day2.jpg',
                'paragrap1_day2' => 'On the second day, we explore the local sights.',
                'paragrap2_day2' => 'The experiences will be unforgettable and enriching.',
                'day3_image' => 'day3.jpg',
                'paragrap1_day3' => 'Our third day will be for relaxation and leisure.',
                'paragrap2_day3' => 'A perfect end to an amazing trip.',
                'day4_image' => 'day4.jpg',
                'paragrap1_day4' => 'Final day to say goodbye.',
                'paragrap2_day4' => 'We hope you enjoyed your time with us.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain jika diperlukan
        ]);
    }
}
