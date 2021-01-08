<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'fullName' => $this->faker->name,
        'birthday' => strtotime($this->faker->date('Y-m-d', 'now')),
        'email' => $this->faker->unique()->safeEmail,
        'phoneNumber' => $this->faker->unique()->e164PhoneNumber(12),
        'job' => $this->faker->jobTitle(50),
        'avatar' => $this->faker->imageUrl(),
        'facebook' => $this->faker->unique()->url(90),
        'gender' => rand(1,3),
        'country' => $this->faker->country,
//            'role' => (rand(0,1))?'admin':'user_course',
        'role' => 'user_course',
        'status' => rand(1,2),
    ];
});
