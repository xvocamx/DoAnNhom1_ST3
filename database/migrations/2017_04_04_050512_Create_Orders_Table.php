<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->dateTime('purchase_date');
          $table->decimal('total_price',18,2);
          $table->text('detail')->nullable();
          $table->integer('status');
          $table->integer('user_id');
          $table->string('name');
          $table->string('email');
          $table->string('phone');
          $table->string('address');
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
}
