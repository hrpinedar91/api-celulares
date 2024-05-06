<?php

namespace Database\Seeders;

use App\Models\Celular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Celular::factory()->count(10)->create();
    }
}
