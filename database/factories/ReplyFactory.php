<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Reply;
use App\Like;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->text,
        'question_id'=> function(){
            return \App\Question::all()->random();
        },
        'user_id'=> function(){
            return \App\User::all()->random();
        },
    ];
});
