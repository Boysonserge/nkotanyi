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
        Schema::create('item_subscription', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('item_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('item_subscription');
    }
};
