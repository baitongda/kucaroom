<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'type' => 1,
        'status' => 1,
        'level' => 1,
        'delete' => 1
    ];
});

$factory->define(App\Material::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(null,1,100),
        'type' => 1,
        'status' => 1,
        'delete' => 1
    ];
});

$factory->define(App\Order::class,function (Faker\Generator $faker){
    $user_id = \App\User::all('id')->toArray();
    $username = \App\User::all('name')->toArray();
    $id = array();
    foreach ($user_id as $value){
        array_push($id,$value['id']);
    }
    $name = array();
    foreach ($username as $value){
        array_push($name,$value['name']);
    }
    return [
        'user_id'=>$faker->randomElements($id),
        'username'=>$faker->randomElements($name),
        'price'=>1,
        'type' => 1,
        'status' => 1,
        'delete' => 1
    ];
});

