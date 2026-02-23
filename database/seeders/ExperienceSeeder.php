<?php

namespace Database\Seeders;
use App\Models\Experience;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'role' => 'Software Engineer',
            'company' => 'Mama Mo Company',
            'years' => '3'
        ]);
    }
}
