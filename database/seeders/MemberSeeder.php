<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'first_name' => 'Jane',
            'middle_name' => 'Smith',
            'last_name' => 'Doe',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Cloe',
            'middle_name' => 'Cullen',
            'last_name' => 'Armstrong',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Anna',
            'middle_name' => 'Sy',
            'last_name' => 'Tan',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Troy',
            'middle_name' => 'Pter',
            'last_name' => 'Tan',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Michael',
            'middle_name' => 'A.',
            'last_name' => 'Johnson',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Emily',
            'middle_name' => 'B.',
            'last_name' => 'Davis',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Sophia',
            'middle_name' => 'C.',
            'last_name' => 'Garcia',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'David',
            'middle_name' => 'E.',
            'last_name' => 'Brown',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'Alice',
            'middle_name' => 'F.',
            'last_name' => 'Johnson',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);

        Member::create([
            'first_name' => 'John',
            'middle_name' => 'D.',
            'last_name' => 'Smith',
            'member_type' => 'Internal Member',
            'created_by' => 1, // Assuming admin user has ID 1
            'updated_by' => 1,
        ]);
    }
}
