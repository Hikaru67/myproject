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
                'avatar' => 'https://lamvt.vn/wp-content/uploads/2017/03/php.jpg',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'C#',
                'description' => 'description subject C#',
                'avatar' => 'https://pluralsight.imgix.net/paths/path-icons/csharp-e7b8fcd4ce.png',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Python',
                'description' => 'description subject Python',
                'avatar' => 'https://transang.me/content/images/2019/01/1200px-Python.svg.png',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Javascript',
                'description' => 'description subject Javascript',
                'avatar' => 'https://nordiccoder.com/app/uploads/2019/12/50-javascript.jpg',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Laravel',
                'description' => 'description subject Laravel',
                'avatar' => 'https://eitguide.net/wp-content/uploads/2020/04/laravel-logo.png',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'ReactJs',
                'description' => 'description subject ReactJs',
                'avatar' => 'https://hackernoon.com/images/z2xg2bpo.jpg',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ],
        ];

        Subjects::insert($data);
    }
}
