<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'     => User::inRandomOrder()->first()->id,
            'book_id'     => Book::inRandomOrder()->first()->id,
            'loan_date'   => fake()->dateTimeBetween('-6 months', 'now'),
            'return_date' => fake()->optional(0.6)->dateTimeBetween('now', '+1 month'),
        ];
    }
}