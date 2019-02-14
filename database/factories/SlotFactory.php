<?php

use Faker\Generator as Faker;
use App\Models\Event;
use App\Models\Enums\SlotType;

$factory->define(\App\Models\Slot::class, function(Faker $faker) {

    $startsAt = $faker->dateTimeBetween('-2 years', '+1 year');
    $amtOfMin = $faker->randomElement([15, 30, 60, 120]);
    $endsAt = (clone $startsAt)->add(new DateInterval("P{$amtOfMin}M"));

    return [
        'event_id' => factory(Event::class),
        'name' => $faker->name,
        'type' => $faker->randomElement(SlotType::values()),
        'starts_at' => $startsAt,
        'ends_at' => $endsAt,
    ];
});
