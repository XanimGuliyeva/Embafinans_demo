<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('fin')->unique();
            $table->text('phone')->unique();
            $table->text('user_code');
            $table->text('email')->unique();
            $table->integer('rating')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->string('category')->default('common');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
