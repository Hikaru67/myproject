<?php

use App\Users;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
                'fullName' => 'Noname',
                'birthday' => 1923788800,
                'email' => 'shinigamii.hikaru@gmail.com',
                'phoneNumber' => '0372056670',
                'job' => 'no job',
                'avatar' => '',
                'facebook' => 'fb.me/hikaru67',
                'gender' => 1,
                'country' => 'Hà Tĩnh',
                'role' => 'admin',
                'status' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'fullName' => 'Naix',
                'birthday' => 923788800,
                'email' => 'shoppingall4youu@gmail.com',
                'phoneNumber' => '0915835xxx',
                'job' => 'no job',
                'avatar' => '',
                'facebook' => 'fb.me/hikaru68',
                'gender' => 1,
                'country' => 'Hà Tĩnh',
                'role' => 'admin',
                'status' => 1,
                'created_at' => now(),
            ],
        ];
        Users::insert($data);
//        Users::factory(55)->create();
        $user = factory(App\Users::class, 55)->create();

    }
}
