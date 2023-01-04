<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('city');
            $table->text('address');
            $table->text('category');
            $table->text('phone');
            $table->text('about');
            $table->text('contact_person');
            $table->text('email');
            $table->text('website');
            $table->text('director');
            $table->text('contact_phone');
            $table->text('status')->default(1);
            $table->text('image');
            $table->longText('content')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
