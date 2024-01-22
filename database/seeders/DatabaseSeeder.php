<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Appointment::factory(5)->create();
        // Contact::factory(5)->create();
        Subject::factory(2)->create();
        Teacher::factory(4)->create();
        // Testimonial::factory(5)->create();
    }
}
