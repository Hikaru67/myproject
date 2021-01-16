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
                'birthday' => 125459011,
                'email' => 'shinigamii.hikaru@gmail.com',
                'phoneNumber' => '0372056670',
                'job' => 'no job',
                'avatar' => AVATAR_USER_DATA[0],
                'facebook' => 'https://www.facebook.com/Hikaru67',
                'gender' => GENDER['MALE'],
                'country' => 'Hà Tĩnh',
                'role' => 'admin',
                'status' => STATUS_USER["ACTIVE"],
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'fullName' => 'Bạch Hạo',
                'birthday' => 923788800,
                'email' => 'shoppingall4youu@gmail.com',
                'phoneNumber' => '0915835xxx',
                'job' => 'no job',
                'avatar' => AVATAR_USER_DATA[0],
                'facebook' => 'https://www.facebook.com/Hikaru68',
                'gender' => GENDER['MALE'],
                'country' => 'Hà Tĩnh',
                'role' => 'admin',
                'status' => STATUS_USER["ACTIVE"],
                'created_at' => now(),
            ],
        ];
        Users::insert($data);
//        Users::factory(55)->create();
        $user = factory(App\Users::class, 55)->create();

    }
}
