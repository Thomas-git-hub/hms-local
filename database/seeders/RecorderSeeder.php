<?php

namespace Database\Seeders;

use App\Models\Recorder;
use Illuminate\Database\Seeder;

class RecorderSeeder extends Seeder
{
    public function run()
    {
        $recorders = [
            [
                'first_name' => 'John',
                'middle_name' => 'D.',
                'last_name' => 'Smith',
                'status' => 'Active',
                'created_by' => 1, // Assuming admin user has ID 1
                'updated_by' => 1,
            ],
            [
                'first_name' => 'Alice',
                'middle_name' => 'B.',
                'last_name' => 'Johnson',
                'status' => 'Active',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'first_name' => 'Michael',
                'middle_name' => 'C.',
                'last_name' => 'Williams',
                'status' => 'Active',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'first_name' => 'Emily',
                'middle_name' => 'D.',
                'last_name' => 'Davis',
                'status' => 'Active',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'first_name' => 'David',
                'middle_name' => 'E.',
                'last_name' => 'Brown',
                'status' => 'Active',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'first_name' => 'Sophia',
                'middle_name' => 'F.',
                'last_name' => 'Garcia',
                'status' => 'Active',
                'created_by' => 1,
                'updated_by' => 1,
            ],
        ];

        foreach ($recorders as $recorder) {
            Recorder::create($recorder);
        }
    }
}
