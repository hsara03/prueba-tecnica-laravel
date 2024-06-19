<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'J.K. Rowling']);
        Author::create(['name' => 'J.R.R. Tolkien']);
        Author::create(['name' => 'George R.R. Martin']);
        Author::create(['name' => 'C.S. Lewis']);
    }
}
