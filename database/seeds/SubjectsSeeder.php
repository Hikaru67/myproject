<?php

use App\Subjects;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'PHP',
                'description' => 'description subject PHP',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'C#',
                'description' => 'description subject C#',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Python',
                'description' => 'description subject Python',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Java',
                'description' => 'description subject Java',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Laravel',
                'description' => 'description subject Laravel',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'ReactJs',
                'description' => 'description subject ReactJs',
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
        ];

        Subjects::insert($data);
    }
}
