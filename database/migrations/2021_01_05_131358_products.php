<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('about');
            $table->text('image');
            $table->text('choice');
            $table->text('choice_img')->nullable();
            $table->integer('value');
            $table->text('term');
            $table->text('min_amount')->nullable();
            $table->text('max_amount')->nullable();
            $table->text('monthly_payment')->nullable();
            $table->text('min_term')->nullable();
            $table->text('max_term')->nullable();
            $table->text('annual_rate')->nullable();
            $table->text('FIFD')->nullable();
            $table->text('commission')->nullable();
            $table->text('payment_form')->nullable();
            $table->text('financing')->nullable();
            $table->text('age')->nullable();
            $table->text('bail')->nullable();
            $table->text('documents')->nullable();
            $table->text('informations')->nullable();
            $table->text('content')->nullable();
            $table->text('category');
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
        Schema::dropIfExists('products');
    }
}
