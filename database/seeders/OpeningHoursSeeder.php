<?php

namespace Database\Seeders;

use App\Models\OpeningHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpeningHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OpeningHour::create([
            'day' => 1,
            'open' => '8:00',
            'close' => '17:00',
        ]);

        OpeningHour::create([
            'day' => 2,
            'open' => '8:00',
            'close' => '17:00',
        ]);

        OpeningHour::create([
            'day' => 3,
            'open' => '8:00',
            'close' => '17:00',
        ]);

        OpeningHour::create([
            'day' => 4,
            'open' => '8:00',
            'close' => '17:00',
        ]);

        OpeningHour::create([
            'day' => 5,
            'open' => '8:00',
            'close' => '17:00',
        ]);

        OpeningHour::create([
            'day' => 6,
            'open' => '8:00',
            'close' => '13:00',
        ]);


    }
}
