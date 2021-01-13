<?php

use App\Course_rqs;
use App\Users;
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
        $DurTime = [5400, 7200, 9000];
        $data = [];
        for($i = 1; $i <= 57; $i++){
            if(Users::find($i)['role']=='user_course'){
                $data[] = [
                    'id' => $i,
                    'frequency' => rand(1,3),
                    'durationTime' => $DurTime[rand(0,2)],
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
