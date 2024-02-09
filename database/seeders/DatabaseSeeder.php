<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Feature;
use App\Models\House;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password!'),
            ]
        );
        $services = ['Track A', 'Track B', 'Track C', 'Track D', 'Track E'];
        foreach ($services as $name) {
            Feature::create(
                ['name' => $name],
                ['description' => 'Loram ipsum dolor sit amet, consectetur adipiscing elit.']
            );
        }
        House::create(
            [
                'name' => 'House A',
                'description' => 'Loram ipsum dolor sit amet, consectetur adipiscing elit.',
            ]
        );
        Reservation::create(
            [
                'user_id' => 1,
                'house_id' => 1,
                'start_time' => now(),
                'end_time' => now()->addDays(7),
            ]
        );
    }
}
