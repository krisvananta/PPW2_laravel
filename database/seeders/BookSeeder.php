<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++) {
            Book::create([
                'title' => fake()->sentence(3),
                'author' => fake()->name(),
                'price' => fake()->numberBetween(10000, 50000),
                'date_published' => fake()->date()
            ]);
        }
    }
}
