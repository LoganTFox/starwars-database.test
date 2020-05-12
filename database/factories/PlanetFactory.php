<?php

/** @var Factory $factory */

use App\Enums\BiomeType;
use App\Enums\PlanetSize;
use App\Planet;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Planet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph(2),
        'biome_type' => BiomeType::UNKNOWN,
        'size' => PlanetSize::UNKNOWN,
    ];
});
