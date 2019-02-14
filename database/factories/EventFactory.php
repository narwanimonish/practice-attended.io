<?php

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $startsAt = $faker->dateTimeBetween('-2 years', '+1 years');
    $amountOfDays = $faker->numberBetween(1, 3);
    $endsAt = (clone $startsAt)->add(new DateInterval("P{$amountOfDays}D"));

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph(3, true),
        'website' => $faker->url,
        'starts_at' => $startsAt,
        'ends_at' => $endsAt,
    ];
});

