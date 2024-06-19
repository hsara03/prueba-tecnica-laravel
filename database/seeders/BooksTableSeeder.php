<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['title' => 'Harry Potter and the Philosopher\'s Stone', 'author_id' => 1]);
        Book::create(['title' => 'Harry Potter and the Chamber of Secrets', 'author_id' => 1]);
        Book::create(['title' => 'Harry Potter and the Prisoner of Azkaban', 'author_id' => 1]);
        Book::create(['title' => 'Harry Potter and the Goblet of Fire', 'author_id' => 1]);
    }
}
