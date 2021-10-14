<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $this->faker->sentence,
        'slug' => $this->faker->slug,
        'content' => $this->faker->text(1600),
    ];
});
