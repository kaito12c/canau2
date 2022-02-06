<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supporter_id')->unique();
            $table->foreignId('meeting_id')->unique();
            // $table->foreignId('category_id');
            //基本情報
            $table->string('slug')->nullable();//スラッグ
            $table->string('birth_where')->nullable();//出身
            $table->string('now_where')->nullable(); //居住地
            $table->string('supporter_image')->nullable(); //トップ画
            $table->string('company_name')->nullable();//会社名
            $table->string('title')->nullable(); //肩書き
            //中学時代
            $table->string('jhs_name')->nullable();
            $table->text('jhs_club')->nullable();
            $table->text('jhs_activities')->nullable();
            //高校時代
            $table->string('hs_name')->nullable();
            $table->text('hs_course')->nullable();
            $table->text('hs_club')->nullable();
            $table->text('hs_activities')->nullable();
            //大学時代
            $table->text('uni_name')->nullable(); //大学名
            $table->text('uni_course')->nullable(); //学部名
            $table->text('uni_activities')->nullable(); //課外活動
            $table->text('uni_work')->nullable(); //アルバイトやインターン
            //一言Q&A
            $table->text('recommend_book')->nullable(); //オススメ本
            $table->text('recommend_movie')->nullable(); //オススメ映画
            $table->text('recommend_youtube')->nullable(); //オススメYouTube
            $table->text('recommend_spot')->nullable(); //オススメスポット
            $table->text('refresh')->nullable(); //オススメ気分転換方法
            //中高時代の振り返りQ&A
            $table->text('good_todo')->nullable(); //Q1.中高時代にやってよかったと思うことは？
            $table->text('recommend_todo')->nullable(); //高校生の時にやっておけばよかったこと
            $table->text('myself_message')->nullable(); //Q3.今、高校１年生（16歳）の自分にメッセージを伝えるとしたら？
            //「働く」を切り取るQ&A
            $table->text('why_now_work')->nullable(); //Q4.今の仕事を選んだきっかけは？？
            $table->text('what_work')->nullable(); //Q5.あなたにとって「働く」とは？
            $table->text('reward_work')->nullable(); //Q6.働いていてやりがいを感じる瞬間は殿ような瞬間ですか？
            //価値観深掘りQ&A
            $table->text('solve_complex')->nullable(); //Q7.過去にあった悩み・コンプレックスはどう解決してきましたか？
            $table->text('change_myself')->nullable(); //Q8.「これに出会って自分は変わった！」と思えるもの（人）は何（誰）ですか？
            $table->text('six_month_todo')->nullable(); //Q9.あなたが、あと６ヶ月しか生きられないとしたら何をしますか？
            $table->text('todo_till_death')->nullable(); //Q10.死ぬまでに実現したいことは？
            $table->text('last_message')->nullable(); //最後に、進路に悩む10代にメッセージを
            $table->timestamp('advise_day')->nullable();//進路相談日
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
