<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\News\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Category::factory(10)->create();
        News::factory(10)->create();
    }
}
