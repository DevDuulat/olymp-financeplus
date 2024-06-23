<?php

namespace Database\Seeders;

use Firefly\FilamentBlog\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::create([
            'name' => 'Криптовалютные биржи',
            'slug' => Str::slug('Криптовалютные биржи'),
        ]);

        Category::create([
            'name' => 'ICO',
            'slug' => Str::slug('ICO'),
        ]);

        Category::create([
            'name' => 'Децентрализованные финансы',
            'slug' => Str::slug('Децентрализованные финансы'),
        ]);

        $this->command->info('Три категории успешно добавлены.');
    }
}
