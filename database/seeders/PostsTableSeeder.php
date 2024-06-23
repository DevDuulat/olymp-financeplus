<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Firefly\FilamentBlog\Enums\PostStatus;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $users = User::all();

        $posts = [
            [
                'title' => 'Топ 10 криптовалютных бирж 2024 года',
                'slug' => 'top-10-kriptovalyutnykh-birzh-2024-goda',
                'sub_title' => 'Исследуйте ведущие криптовалютные биржи года.',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'status' => PostStatus::PUBLISHED,
                'published_at' => Carbon::now()->subDays(7),
                'cover_photo_path' => 'blog-feature-images/exchange-1.jpg',
                'photo_alt_text' => 'Платформа обмена криптовалютами',
                'user_id' => $users->random()->id,
            ],
            [
                'title' => 'Как выбрать лучшую криптовалютную биржу',
                'slug' => 'kak-vybrat-luchshuyu-kriptovalyutnuyu-birzhu',
                'sub_title' => 'Руководство по выбору подходящей криптовалютной биржи для ваших нужд.',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'status' => PostStatus::PUBLISHED,
                'published_at' => Carbon::now()->subDays(5),
                'cover_photo_path' => 'blog-feature-images/exchange-2.jpg',
                'photo_alt_text' => 'Выбор криптовалютной биржи',
                'user_id' => $users->random()->id,
            ],
            [
                'title' => 'Меры безопасности, которые должна реализовать каждая криптовалютная биржа',
                'slug' => 'meri-bezopasnosti-kotorye-dolzhna-realizovat-kazhdaya-kriptovalyutnaya-birzha',
                'sub_title' => 'Узнайте об основных практиках безопасности для криптовалютных бирж.',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
                'status' => PostStatus::PUBLISHED,
                'published_at' => Carbon::now()->subDays(3),
                'cover_photo_path' => 'blog-feature-images/exchange-3.jpg',
                'photo_alt_text' => 'Безопасность криптовалютной биржи',
                'user_id' => $users->random()->id,
            ],
            // Добавьте больше постов при необходимости
        ];

        foreach ($posts as $post) {
            $newPost = new Post([
                'title' => $post['title'],
                'slug' => $post['slug'],
                'sub_title' => $post['sub_title'],
                'body' => $post['body'],
                'status' => $post['status'],
                'published_at' => $post['published_at'],
                'cover_photo_path' => $post['cover_photo_path'],
                'photo_alt_text' => $post['photo_alt_text'],
                'user_id' => $post['user_id'],
            ]);

            $newPost->save();

            $newPost->categories()->attach($categories->random(rand(1, 3))->pluck('id')->toArray());
            $newPost->tags()->attach($tags->random(rand(1, 3))->pluck('id')->toArray());
        }

        $this->command->info('Посты о криптовалютных биржах успешно добавлены.');
    }
}
