<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'           => $this->faker->sentence(3),
            'cover_image'     => $this->faker->imageUrl(640, 480),
            'content'         => $this->faker->paragraphs(3, true),
            'robotics_kit_id' => \App\Models\RoboticsKit::inRandomOrder()->first()->id,
        ];
    }
}