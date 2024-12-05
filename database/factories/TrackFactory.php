<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;


class TrackFactory extends Factory
{
    protected $model = Track::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'artist' => $this->faker->name,
            'duration' => $this->faker->numberBetween(120,400),
        ];
    }
}
