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
        $services = ['services A', 'services B', 'services C', 'services D', 'services E'];
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
        for ($i = 0; $i < 35; $i++) {
            Reservation::create(
                [
                    'name' => 'test user' . $i . '',
                    'phone' => '12345678' . $i . '',
                    'email' => 'test' . $i . '@mail.com',
                    'postcode' => $i . '234',
                    'city' => 'test city' . $i,
                    'address' => 'test address' . $i,
                    'hsz' => 'test' . $i . ' hsz', // 'hsz' stands for 'house number', 'house number' is 'házszám' in Hungarian
                    'hash' => 'test' . $i . ' hash', // 'hash' is a unique identifier for the reservation, it's like a 'token' or 'key                
                    'house_id' => 1,
                    'start_date' => now(),
                    'end_date' => now()->addDays(7 + $i),

                ]
            );
        }
    }
}
