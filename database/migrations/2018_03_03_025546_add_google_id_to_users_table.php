<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoogleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 加入 google_id 欄位到 password 欄位後方
            $table->string('google_id', 30)
                ->nullable()
                ->after('password');

            // 建立索引
            $table->index(['google_id'], 'user_google_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 移除欄位
            $table->dropColumn('google_id');
        });
    }
}
