<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('work_name');
            $table->timestamp('start_at');
            $table->text('start_at_jp');
            // $table->string('email');
            // $table->longText('content');
            // $table->longText('zoom_meeting_id');
            // $table->longText('zoom_join_url');
            // $table->longText('zoom_start_url');
            // $table->longText('zoom_password');
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
        Schema::dropIfExists('meetings');
    }
}
