<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Transaction;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Category Seeder: buat 5 kategori
        Category::factory(5)->create();

        // 2. User Seeder
        User::factory()->create([
            'role' => 'admin',
            'email' => 'admin@example.com'
        ]);

        User::factory(3)->create([
            'role' => 'customer'
        ]);

        // 3. Car Seeder
        Car::factory(10)->create();

        // 4. Booking Seeder
        Booking::factory(count: 5)->create();

        // 5. Transaction Seeder
        Transaction::factory(5)->create();
    }
}
