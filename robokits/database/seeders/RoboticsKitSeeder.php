<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
$kits = [
    [
    'name' => 'StarterKit',
    'description' => 'Beginner robotics kit for learning basics',
    ],
    [
    'name' => 'Educational Robotics Kit',
    'description' => 'Comprehensive kit for educational purposes',
    ],
    [
    'name' => 'Kit5',
    'description' => 'Advanced robotics kit with extended features',
    ],
];

foreach ($kits as $kit) {
    \App\Models\RoboticsKit::create($kit);
}