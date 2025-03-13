<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Student::create([
            'first_name' => 'Jane',
            'middle_name' => 'Smith',
            'last_name' => 'Doe',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Cloe',
            'middle_name' => 'Cullen',
            'last_name' => 'Armstrong',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Anna',
            'middle_name' => 'Sy',
            'last_name' => 'Tan',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Michael',
            'middle_name' => 'A.',
            'last_name' => 'Johnson',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Emily',
            'middle_name' => 'B.',
            'last_name' => 'Davis',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'David',
            'middle_name' => 'C.',
            'last_name' => 'Brown',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Sophia',
            'middle_name' => 'D.',
            'last_name' => 'Garcia',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'James',
            'middle_name' => 'E.',
            'last_name' => 'Wilson',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Olivia',
            'middle_name' => 'F.',
            'last_name' => 'Martinez',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Student::create([
            'first_name' => 'Liam',
            'middle_name' => 'G.',
            'last_name' => 'Anderson',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);
    }
}
