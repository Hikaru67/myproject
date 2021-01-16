<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'fullName' => $this->faker->name,
        'birthday' => $faker->unixTime(),
        'email' => $this->faker->unique()->safeEmail,
        'phoneNumber' => $this->faker->unique()->e164PhoneNumber(12),
        'job' => $this->faker->jobTitle,
        'avatar' => AVATAR_USER_DATA[rand(0,6)],
        'facebook' => $this->faker->unique()->url,
        'gender' => rand(1,2),
        'country' => $this->faker->country,
        'role' => 'user_course',
        'status' => rand(1,2),
    ];
});
