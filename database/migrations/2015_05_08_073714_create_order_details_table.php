<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_details', function(Blueprint $table)
		{
            $table->string('detailid')->unique();
            $table->string('orderid');
            $table->string('productid');
            $table->float('price');
            $table->float('amount');
            $table->float('payment');
            $table->string('detail1');
            $table->string('detail2');
            $table->string('detail3');
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
		Schema::drop('order_details');
	}

}
