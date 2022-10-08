<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventTitle')->nullable();
            $table->string('eventSummary')->nullable();
            $table->mediumText('eventDescription')->nullable();
            $table->string('eventImage')->nullable();
            $table->string('eventLocation')->nullable();
            $table->timestamp('eventDate')->nullable();
            $table->string('eventTime')->nullable();
            $table->string('eventFee')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('events');
    }
};