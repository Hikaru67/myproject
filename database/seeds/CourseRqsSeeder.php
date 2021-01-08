<?php

use App\Course_rqs;
use App\User;
use Illuminate\Database\Seeder;

class CourseRqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i = 1; $i <= 57; $i++){
            if(User::find($i)['role']=='user_course'){
                $data[] = [
                    'id' => $i,
                    'frequency' => rand(1,3),
                    'durationTime' => (($a = rand(1,3))==1) ? 5400 : (($a == 2) ? 7200 : 9000),
                    'targetTop' => rand(1,3),
                    'wishJob'=> rand(1,3),
                    'completeExercise' => rand(1,3),
                    'outCondition' => rand(1,3),
                    'nowSkill' => 'none',
                    'mission' => 'none',
                    'userId' => $i,
                    'classesId' => rand(1,6),
                    'created_at' => now(),
                ];
            }
        }
        Course_rqs::insert($data);
    }
}
