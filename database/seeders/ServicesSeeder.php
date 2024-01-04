<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Corte de cabello',
            'duration' => 180,
        ]);

        Service::create([
            'name' => 'Tinturado de cabello',
            'duration' => 180,
        ]);

        Service::create([
            'name' => 'Maquillaje',
            'duration' => 40,
        ]);
    }
}
