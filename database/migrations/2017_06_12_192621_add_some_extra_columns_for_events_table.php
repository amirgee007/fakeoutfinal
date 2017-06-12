<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeExtraColumnsForEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->date('starts_date')->nullable();
            $table->time('start_time')->nullable();
            $table->date('ends_date')->nullable();
            $table->time('ends_time')->nullable();
            $table->string('image')->nullable();
            $table->string('event_type')->nullable();
            $table->string('ticket_type')->nullable();
            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('starts_date');
            $table->dropColumn('start_time');
            $table->dropColumn('ends_date');
            $table->dropColumn('ends_time');
            $table->dropColumn('image');
            $table->dropColumn('event_type');
            $table->dropColumn('ticket_type');
            $table->dropColumn('comments');
        });
    }
}
