<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id');
            $table->string('type');
            $table->string('frequency');
            $table->unsignedSmallInteger('level');
            $table->unsignedSmallInteger('bedroom');
            $table->unsignedSmallInteger('bathroom');
            $table->unsignedSmallInteger('hours');
            $table->text('extras');
            $table->text('comment')->default(null);
            $table->timestamp('start_date')->nullable();
            $table->string('start_hour')->nullable();
            $table->unsignedSmallInteger('estimated_time')->default(0);
            $table->float('estimated_price')->default(0);
            $table->bigInteger('card_number')->default(null);

            $table->foreign('service_id')->references('id')->on('services')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');

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
        Schema::dropIfExists('bookings');
    }
}
