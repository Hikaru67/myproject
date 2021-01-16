<?php

use App\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
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
                'id'    =>  1,
                'name'  => 'Front end',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 6,
                'created_at' => now(),
            ],
            [
                'id'    =>  2,
                'name'  => 'Back end',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id'    =>  3,
                'name'  => 'Fullstack',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 4,
                'created_at' => now(),
            ],
            [
                'id'    =>  4,
                'name'  => 'Tester',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 2,
                'created_at' => now(),
            ],
            [
                'id'    =>  5,
                'name'  => 'Machine learning',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 3,
                'created_at' => now(),
            ],
            [
                'id'    =>  6,
                'name'  => 'Artificial Intelligence',
                'avatar' => 'https://i.pinimg.com/originals/34/61/4d/34614d927f7c8c1c3562ef75f0471c37.jpg',
                'status' => 2,
                'userId' => 2,
                'subjectId' => 3,
                'created_at' => now(),
            ],
        ];

        Classes::insert($data);
    }
}
