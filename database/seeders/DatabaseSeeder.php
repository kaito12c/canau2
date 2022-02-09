<?php
//ユーザーやコンテンツの追加・更新・削除などはここで行う。

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Session;
use App\Models\Meeting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(TagSeeder::class);
         $this->call(MeetingSeeder::class);
        // $user = User::factory()->create();

        // $healthcare = Category::create([
        //     'job_name' => '医療',
        //     'slug' => 'healthcare'
        // ]);

        // $education = Category::create([
        //     'job_name' => 'education',
        //     'slug' => 'education'
        // ]);

        // $sports = Category::create([
        //     'job_name' => 'スポーツ',
        //     'slug' => 'sports'
        // ]);

        // Adviser::create([
        //     'user_id' => $user->id,
        //     'category_id' => $healthcare->id,
        //     'title' => '①相談したことで勇気がもらえました。',
        //     'slug' => 'first-adviser',
        //     'company_name' => '肩書きは何でもいいでしょうよ。',
        //      'body' => 'ここをどういじるかは自分次第。より見やすく、よりわかりやすくを意識してがんばりましょう。'
        // ]);

        // Adviser::create([
        //     'user_id' => $user->id,
        //     'category_id' => $education->id,
        //     'title' => '②相談することの重要性',
        //     'slug' => 'second-adviser',
        //     'company_name' => '肩書きは株式会社〇〇代表的な',
        //      'body' => 'ここをどういじるかは自分次第。より見やすく、よりわかりやすくを意識してがんばりましょう。'
        // ]);

        // Adviser::create([
        //     'user_id' => $user->id,
        //     'category_id' => $sports->id,
        //     'title' => '③メンタルの重要性を説く',
        //     'slug' => 'third-adviser',
        //     'company_name' => '肩書きはなんでもええ。',
        //      'body' => 'ここをどういじるかは自分次第。より見やすく、よりわかりやすくを意識してがんばりましょう。'
        // ]);
    }
}
