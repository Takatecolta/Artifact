<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            // 追加の処理をここに記述
            // 例: 他のテーブルへのデータ挿入、データ変換、外部APIの呼び出しなど
            // 追加の処理が複数ある場合は、別のメソッドやクラスに分割して呼び出すこともできます
            $table->date('current_date')->default(now());
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('body'); 
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
        Schema::dropIfExists('reviews');
    }
}
