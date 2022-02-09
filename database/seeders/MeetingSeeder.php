<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meeting;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1->job 2->advice_topic
        Meeting::factory()->create(['id' => 1, 'start_at' => '2022-02-09 16:00', 'start_at_jp' => '2022年2月9日（水）16:00〜16:20']);
        Meeting::factory()->create(['id' => 2, 'start_at' => '2022-02-09 16:30', 'start_at_jp' => '2022年2月9日（水）16:30〜16:50']);
        Meeting::factory()->create(['id' => 3, 'start_at'  => '2022-02-09 17:00', 'start_at_jp' => '2022年2月9日（水）17:00〜17:20']);
        Meeting::factory()->create(['id' => 4, 'start_at'  => '2022-02-09 17:30', 'start_at_jp' => '2022年2月9日（水）17:30〜17:50']);
        Meeting::factory()->create(['id' => 5, 'start_at'  => '2022-02-09 18:00', 'start_at_jp' => '2022年2月9日（水）18:00〜18:20']);
        Meeting::factory()->create(['id' => 6, 'start_at'  => '2022-02-09 18:30', 'start_at_jp' => '2022年2月9日（水）18:30〜18:50']);
        Meeting::factory()->create(['id' => 7, 'start_at'  => '2022-02-09 19:00', 'start_at_jp' => '2022年2月9日（水）19:00〜19:20']);
        Meeting::factory()->create(['id' => 8, 'start_at'  => '2022-02-09 19:30', 'start_at_jp' => '2022年2月9日（水）19:00〜19:50']);
        Meeting::factory()->create(['id' => 9, 'start_at'  => '2022-02-11 16:00', 'start_at_jp' => '2022年2月11日（金）16:00〜16:20']);
        Meeting::factory()->create(['id' => 10, 'start_at'  => '2022-02-11 16:30', 'start_at_jp' => '2022年2月11日（金）16:30〜16:50']);
        Meeting::factory()->create(['id' => 11, 'start_at'  => '2022-02-11 17:00', 'start_at_jp' => '2022年2月11日（金）17:00〜17:20']);
        Meeting::factory()->create(['id' => 12, 'start_at'  => '2022-02-11 17:30', 'start_at_jp' => '2022年2月11日（金）17:30〜17:50']);
        Meeting::factory()->create(['id' => 13, 'start_at'  => '2022-02-11 18:00', 'start_at_jp' => '2022年2月11日（金）18:00〜18:20']);
        Meeting::factory()->create(['id' => 14, 'start_at'  => '2022-02-11 18:30', 'start_at_jp' => '2022年2月11日（金）18:30〜18:50']);
        Meeting::factory()->create(['id' => 15, 'start_at'  => '2022-02-11 19:00', 'start_at_jp' => '2022年2月11日（金）19:00〜19:20']);
        Meeting::factory()->create(['id' => 16, 'start_at'  => '2022-02-11 19:30', 'start_at_jp' => '2022年2月11日（金）19:30〜19:50']);
        Meeting::factory()->create(['id' => 17, 'start_at'  => '2022-02-13 9:00', 'start_at_jp' => '2022年2月13日（日）9:00〜9:20']);
        Meeting::factory()->create(['id' => 18, 'start_at'  => '2022-02-13 9:30', 'start_at_jp' => '2022年2月13日（日）9:30〜9:50']);
        Meeting::factory()->create(['id' => 19, 'start_at'  => '2022-02-13 10:00', 'start_at_jp' => '2022年2月13日（日）10:00〜10:20']);
        Meeting::factory()->create(['id' => 20, 'start_at'  => '2022-02-13 10:30', 'start_at_jp' => '2022年2月13日（日）10:30〜10:50']);
        Meeting::factory()->create(['id' => 21, 'start_at'  => '2022-02-13 11:00', 'start_at_jp' => '2022年2月13日（日）11:00〜11:20']);
        Meeting::factory()->create(['id' => 22, 'start_at'  => '2022-02-13 11:30', 'start_at_jp' => '2022年2月13日（日）11:30〜11:50']);



    }
}
