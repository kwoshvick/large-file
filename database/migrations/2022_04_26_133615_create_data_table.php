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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('stock_code')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('data');
    }
};
