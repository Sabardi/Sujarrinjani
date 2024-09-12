<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('bookings')->insert([
        //     [
        //         'tours_id' => 1, // Ganti dengan ID yang sesuai dari tabel tours
        //         'kode_booking' => 'BK0001',
        //         'fullName' => 'Alice Johnson',
        //         'email' => 'alice.johnson@example.com',
        //         'pasport_number' => 'C12345678',
        //         'nationality' => 'Canadian',
        //         'total_participan' => 2,
        //         'arrival_date' => '2024-09-10',
        //         'pickup_time' => '08:00:00',
        //         'pickup_location' => 'Main Entrance',
        //         'add_message' => 'No special requirements.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'tours_id' => 1, // Ganti dengan ID yang sesuai dari tabel tours
        //         'kode_booking' => 'BK0002',
        //         'fullName' => 'Bob Williams',
        //         'email' => 'bob.williams@example.com',
        //         'pasport_number' => 'D23456789',
        //         'nationality' => 'Australian',
        //         'total_participan' => 3,
        //         'arrival_date' => '2024-09-15',
        //         'pickup_time' => '12:00:00',
        //         'pickup_location' => 'Hotel Reception',
        //         'add_message' => 'Please provide a child seat.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'tours_id' => 1, // Ganti dengan ID yang sesuai dari tabel tours
        //         'kode_booking' => 'BK0003',
        //         'fullName' => 'Carol Smith',
        //         'email' => 'carol.smith@example.com',
        //         'pasport_number' => 'E34567890',
        //         'nationality' => 'German',
        //         'total_participan' => 1,
        //         'arrival_date' => '2024-09-20',
        //         'pickup_time' => '15:00:00',
        //         'pickup_location' => 'Airport',
        //         'add_message' => 'Vegetarian meal requested.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'tours_id' => 1, // Ganti dengan ID yang sesuai dari tabel tours
        //         'kode_booking' => 'BK0004',
        //         'fullName' => 'David Brown',
        //         'email' => 'david.brown@example.com',
        //         'pasport_number' => 'F45678901',
        //         'nationality' => 'French',
        //         'total_participan' => 4,
        //         'arrival_date' => '2024-09-25',
        //         'pickup_time' => '10:00:00',
        //         'pickup_location' => 'Train Station',
        //         'add_message' => 'Need an English-speaking guide.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'tours_id' => 1, // Ganti dengan ID yang sesuai dari tabel tours
        //         'kode_booking' => 'BK0005',
        //         'fullName' => 'Emily Davis',
        //         'email' => 'emily.davis@example.com',
        //         'pasport_number' => 'G56789012',
        //         'nationality' => 'American',
        //         'total_participan' => 2,
        //         'arrival_date' => '2024-10-01',
        //         'pickup_time' => '17:00:00',
        //         'pickup_location' => 'Hotel Lobby',
        //         'add_message' => 'Allergic to nuts.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
        Booking::factory()->count(100)->create();
    }
}
