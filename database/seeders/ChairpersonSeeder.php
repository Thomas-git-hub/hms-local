<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChairpersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Chairperson::create([
            'first_name' => 'John',
            'middle_name' => 'A.',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Jane',
            'middle_name' => 'B.',
            'last_name' => 'Smith',
            'email' => 'jane.smith@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Emily',
            'middle_name' => 'C.',
            'last_name' => 'Johnson',
            'email' => 'emily.johnson@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Michael',
            'middle_name' => 'D.',
            'last_name' => 'Williams',
            'email' => 'michael.williams@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Sarah',
            'middle_name' => 'E.',
            'last_name' => 'Brown',
            'email' => 'sarah.brown@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'David',
            'middle_name' => 'F.',
            'last_name' => 'Garcia',
            'email' => 'david.garcia@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Laura',
            'middle_name' => 'G.',
            'last_name' => 'Martinez',
            'email' => 'laura.martinez@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'James',
            'middle_name' => 'H.',
            'last_name' => 'Wilson',
            'email' => 'james.wilson@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Olivia',
            'middle_name' => 'I.',
            'last_name' => 'Taylor',
            'email' => 'olivia.taylor@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'William',
            'middle_name' => 'J.',
            'last_name' => 'Anderson',
            'email' => 'william.anderson@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Chairperson::create([
            'first_name' => 'Sophia',
            'middle_name' => 'K.',
            'last_name' => 'Thomas',
            'email' => 'sophia.thomas@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
