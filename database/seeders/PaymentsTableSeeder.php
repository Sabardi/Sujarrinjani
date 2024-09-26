<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('payments')->insert([
            [
                'id' => 1,
                'nasabah_name' => 'John Doe',
                'name' => 'BRI',
                'norek' => 1234567890123456,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nasabah_name' => 'Jane Smith',
                'name' => 'BNI',
                'norek' => 2345678901234567,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nasabah_name' => 'Alice Johnson',
                'name' => 'Seabank',
                'norek' => 3456789012345678,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
