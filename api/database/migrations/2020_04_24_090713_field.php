<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Field extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->foreign('writer_id')->references('id')->on('writers');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });

        Schema::table('users', function(Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::table('logs', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('transactions', function(Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->dropForeign(['writer_id']);
            $table->dropForeign(['publisher_id']);
        });

        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::table('logs', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('transactions', function(Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
