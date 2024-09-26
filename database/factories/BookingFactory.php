<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Menghasilkan tanggal acak antara 2 tahun lalu hingga sekarang
        $createdAt = $this->faker->dateTimeBetween('-2 years', 'now');
        // Tanggal updated_at akan lebih besar atau sama dengan created_at
        $updatedAt = $this->faker->dateTimeBetween($createdAt, 'now');

        return [
            'tours_id' => 1, // ID dari tour yang sudah ada
            'fullName' => $this->faker->name,
            'kode_booking' => 'BK-' . strtoupper(Str::random(10)),
            'email' => $this->faker->unique()->safeEmail,
            'pasport_number' => strtoupper(Str::random(8)),
            'nationality' => $this->faker->country,
            'total_participan' => $this->faker->numberBetween(1, 5),
            'arrival_date' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
            'pickup_time' => $this->faker->time('H:i:s'),
            'pickup_location' => $this->faker->city,
            // 'status' => $this->faker->randomElement(['unpaid', 'checked', 'success']),
            'add_message' => $this->faker->sentence,
            'created_at' => $createdAt, // Tanggal acak pembuatan
            'updated_at' => $updatedAt, // Tanggal acak pembaruan
        ];
    }
}
