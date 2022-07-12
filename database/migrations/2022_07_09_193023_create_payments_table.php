<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('subscription_id')->constrained()
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('amount_paid');
            $table->boolean('paid')->default(false);
            $table->timestamp('end_date')->default(now());
            $table->string('transaction_id')->nullable();
            $table->string('payment_phone')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
