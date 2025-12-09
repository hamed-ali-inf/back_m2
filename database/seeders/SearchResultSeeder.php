<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SearchResult;

class SearchResultSeeder extends Seeder
{
    public function run(): void
    {
        SearchResult::insert([
            [
                'title' => 'Laravel Documentation',
                'content' => 'Official Laravel documentation for PHP framework.',
                'url' => 'https://laravel.com/docs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'React JS',
                'content' => 'A JavaScript library for building user interfaces.',
                'url' => 'https://react.dev',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}