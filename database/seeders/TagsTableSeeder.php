<?php

namespace Database\Seeders;

use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tag::create([
            'name' => 'Bitcoin',
            'slug' => Str::slug('Bitcoin'),
        ]);

        Tag::create([
            'name' => 'Ethereum',
            'slug' => Str::slug('Ethereum'),
        ]);

        Tag::create([
            'name' => 'DeFi',
            'slug' => Str::slug('DeFi'),
        ]);

        $this->command->info('Три тега успешно добавлены.');
    }
}
