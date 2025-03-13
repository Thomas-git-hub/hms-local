<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Adviser::create([
            'first_name' => 'John',
            'middle_name' => 'A.',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Jane',
            'middle_name' => 'B.',
            'last_name' => 'Smith',
            'email' => 'jane.smith@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Emily',
            'middle_name' => 'C.',
            'last_name' => 'Johnson',
            'email' => 'emily.johnson@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Michael',
            'middle_name' => 'D.',
            'last_name' => 'Williams',
            'email' => 'michael.williams@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Sarah',
            'middle_name' => 'E.',
            'last_name' => 'Brown',
            'email' => 'sarah.brown@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Alice',
            'middle_name' => 'F.',
            'last_name' => 'Green',
            'email' => 'alice.green@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Robert',
            'middle_name' => 'G.',
            'last_name' => 'White',
            'email' => 'robert.white@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Linda',
            'middle_name' => 'H.',
            'last_name' => 'Black',
            'email' => 'linda.black@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'James',
            'middle_name' => 'I.',
            'last_name' => 'Blue',
            'email' => 'james.blue@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Patricia',
            'middle_name' => 'J.',
            'last_name' => 'Red',
            'email' => 'patricia.red@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        \App\Models\Adviser::create([
            'first_name' => 'Charles',
            'middle_name' => 'K.',
            'last_name' => 'Yellow',
            'email' => 'charles.yellow@example.com',
            'suffix' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
