<?php

namespace Database\Factories;

use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \App\Faker\Provider\PicsumImage($faker));
        return [
            'likes' => $this->faker->numberBetween(0, 10000),
            'dislikes' => $this->faker->numberBetween(0, 10000),
            'name' => $this->faker->name(),
            'photo'=> $faker->image('resources/image', 800, 800),
        ];
    }
}
