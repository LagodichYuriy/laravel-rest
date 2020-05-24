<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id_employee')->unsigned();
			$table->integer('user_id_reviewer')->unsigned();
			$table->tinyInteger('rating')->unsigned();
			$table->text('comment')->nullable();
			$table->timestamps();

			$table->unique(['user_id_employee', 'user_id_reviewer']);
			$table->index('user_id_employee');
			$table->index('user_id_reviewer');
			$table->index('rating');
			$table->index('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('reviews');
	}
}
