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
        $data = [];
        for($i=1; $i<=5; $i++){
            $data[] = [
                'id'    =>  $i,
                'name'  => 'class '.$i,
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'subjectId' => rand(1,5),
                'created_at' => now(),
            ];
        }
        $data[] = [
            'id'    =>  6,
            'name'  => 'class 6',
            'avatar' => '',
            'status' => 2,
            'userId' => 2,
            'subjectId' => rand(1,5),
            'created_at' => now(),
        ];
        Classes::insert($data);
    }
}
