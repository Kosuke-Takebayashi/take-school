<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'title' => 'HTML基礎',
            'description' => 'HTMLの基本タグや構造を学びます',
            'video_url' => 'https://example.com/html-video',
        ]);

        Lesson::create([
            'title' => 'CSS基礎',
            'description' => 'CSSのセレクタやスタイルの基本を学びます',
            'video_url' => 'https://example.com/css-video',
        ]);
    }
}
