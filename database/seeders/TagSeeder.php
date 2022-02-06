<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1->job 2->advice_topic
        Tag::factory()->create(['id' => 1, 'name' => '医療', 'sort_no'  => 1 ]);
        Tag::factory()->create(['id' => 2, 'name' => '福祉', 'sort_no'  => 1 ]);
        Tag::factory()->create(['id' => 3, 'name'  => '美容', 'sort_no' => 1 ]);
        Tag::factory()->create(['id' => 4, 'name'  => '観光', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 5, 'name'  => '飲食', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 6, 'name'  => '教育', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 7, 'name'  => '出版', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 8, 'name'  => 'テレビ', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 9, 'name'  => '音楽', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 10, 'name'  => '芸能', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 11, 'name'  => 'スポーツ', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 12, 'name'  => 'デザイン', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 13, 'name'  => 'IT', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 14, 'name'  => '士業', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 15, 'name'  => '金融', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 16, 'name'  => '建築', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 17, 'name'  => '公務員', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 18, 'name'  => '流通', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 19, 'name'  => '政治', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 20, 'name'  => 'アート', 'sort_no'    => 1]);
        Tag::factory()->create(['id' => 21, 'name'  => 'やりたいことがない', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 22, 'name'  => 'モチベーションの上げ方', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 23, 'name'  => '人間関係がうまくいかない', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 24, 'name'  => '親とうまくいかない', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 25, 'name'  => '自信がない', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 26, 'name'  => '将来が不安', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 27, 'name'  => '働くとは何か', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 29, 'name'  => 'リーダーシップ', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 30, 'name'  => 'スキルの身につけ方', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 31, 'name'  => '効果的な勉強方法', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 32, 'name'  => '孤独である', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 33, 'name'  => '辛い時の乗り越え方', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 34, 'name'  => '夢の見つけ方', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 35, 'name'  => '充実した大学生活にするには', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 36, 'name'  => '一歩踏み出す勇気', 'sort_no'    => 2]);
        Tag::factory()->create(['id' => 37, 'name'  => 'トラウマを抱えた人生', 'sort_no'    => 2]);



    }
}
