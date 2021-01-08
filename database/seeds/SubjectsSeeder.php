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
        $data = [];
        for($i = 1; $i < 6; $i++){
            $data[] = [
                'id' => $i,
                'name' => 'subject'.$i,
                'description' => 'description subject '.$i,
                'avatar' => '',
                'status' => 1,
                'userId' => 2,
                'created_at' => now(),
            ];
        }

        Subjects::insert($data);
    }
}
