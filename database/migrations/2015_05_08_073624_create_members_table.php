<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->string('memberid')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('email');
            $table->string('phone');
            $table->integer('gender');
            $table->date('birthday');
            $table->string('address');
            $table->string('member1');
            $table->string('member2');
            $table->string('member3');
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
		Schema::drop('members');
	}

}
