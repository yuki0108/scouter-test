<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => '投稿のタイトル',
        'body' => "scouterのテストです。\nこれがLaravel上級の問題です。他にもコースはあるよ。",
    ];
});