<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->date('current_date')->nullable();
            $table->date('deadline_date')->nullable();
            $table->time('planned_time')->nullable(); // 予定時間のカラムを追加
            $table->time('actual_time')->nullable(); // 実績時間のカラムを追加
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('body')->nullable(); //概要はなくてもいい
            $table->integer('user_id')->unsigned(); 
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
        Schema::dropIfExists('tickets');
    }
}
