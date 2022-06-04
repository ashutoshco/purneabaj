<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("address_id")->constrained();
            $table->foreignId("coupon_id")->constrained();
            $table->boolean("isDElivered")->default(0);
            $table->boolean("isProcessing")->default(0);
            $table->boolean("IsShipped")->default(0);
            $table->boolean("ordered")->default(0);
            $table->date("dateforordered")->nullable();
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
        Schema::dropIfExists('orders');
    }
};
