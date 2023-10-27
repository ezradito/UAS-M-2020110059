<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'isbn' => '1234567890123',
            'judul' => 'Sample Book',
            'halaman' => 200,
            'kategori' => 'Fiction',
            'penerbit' => 'Example Publisher',
        ]);

        // Add more seed data as needed
    }
}
