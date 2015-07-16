<?php

namespace App\Libraries\Repositories;


use App\Models\Project;

class ProjectRepository
{

	/**
	 * Returns all Projects
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Project::all();
	}

	/**
	 * Stores Project into database
	 *
	 * @param array $input
	 *
	 * @return Project
	 */
	public function store($input)
	{
		return Project::create($input);
	}

	/**
	 * Find Project by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Project
	 */
	public function findProjectById($id)
	{
		return Project::find($id);
	}

	/**
	 * Updates Project into database
	 *
	 * @param Project $project
	 * @param array $input
	 *
	 * @return Project
	 */
	public function update($project, $input)
	{
		$project->fill($input);
		$project->save();

		return $project;
	}
}