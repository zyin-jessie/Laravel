<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(10)->create();

        // Student::create([
        //     'first_name' => 'John',
        //     'last_name' => 'Doe',
        //     'middle_initial' => '',
        //     'email' => 'john.doe@gmail.com',
        //     'password' => 'johndoe123',
        //     'contact' => '099287451349',
        //     'college' => 'College of Informatics and Computer Science',
        //     'program' => 'Information Technology'
        // ]);
    }
}
