<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreditApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_apply', function (Blueprint $table) {
            $table->id();
            $table->text('product_id')->nullable();
            $table->text('purpose');
            $table->text('amount');
            $table->text('term');
            $table->text('monthly_payment');
            $table->text('long_name');
            $table->text('address');
            $table->text('register_address');
            $table->text('birthday');
            $table->text('organization');
            $table->text('position');
            $table->text('work_term');
            $table->text('monthly_salary');
            $table->text('home_phone');
            $table->text('mobile_phone');
            $table->text('work_phone');
            $table->text('email');
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
        Schema::dropIfExists('credit_apply');
    }
}
