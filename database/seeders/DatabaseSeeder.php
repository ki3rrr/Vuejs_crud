<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Order matters: appointments need existing doctors and patients.
     */
    public function run(): void
    {
        $this->call([
            DoctorSeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
