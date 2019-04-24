<?php
namespace App\Services\Admin;

use App\District as District;

class DistrictService 
{
	public function all()
	{
		return District::all();
	}

	public function show($id = 0)
	{
		return $id ? District::find($id) : new District;
	}

	public function create($input)
	{
		$district = District::create($input);
		return $district ? true : false;
	}

	public function update($input)
	{
		$district = District::find($input['id'])->update($input);
		return $district ? true : false;
	}

	public function delete($id = 0)
	{
		$district = District::find($id);
		$district->delete();
	}
}