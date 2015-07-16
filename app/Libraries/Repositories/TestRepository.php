<?php

namespace App\Libraries\Repositories;


use App\Models\Test;

class TestRepository
{

	/**
	 * Returns all Tests
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Test::all();
	}

	/**
	 * Stores Test into database
	 *
	 * @param array $input
	 *
	 * @return Test
	 */
	public function store($input)
	{
		return Test::create($input);
	}

	/**
	 * Find Test by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Test
	 */
	public function findTestById($id)
	{
		return Test::find($id);
	}

	/**
	 * Updates Test into database
	 *
	 * @param Test $test
	 * @param array $input
	 *
	 * @return Test
	 */
	public function update($test, $input)
	{
		$test->fill($input);
		$test->save();

		return $test;
	}
}