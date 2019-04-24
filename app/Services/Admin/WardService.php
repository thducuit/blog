<?php
namespace App\Services\Admin;

use App\Ward as Ward;

class WardService 
{
	public function all()
	{
		return Ward::all();
	}

	public function show($id = 0)
	{
		return $id ? Ward::find($id) : new Ward;
	}

	public function create($input)
	{
		$ward = Ward::create($input);
		return $ward ? true : false;
	}

	public function update($input)
	{
		$ward = Ward::find($input['id'])->update($input);
		return $ward ? true : false;
	}

	public function delete($id = 0)
	{
		$ward = Ward::find($id);
		$ward->delete();
	}
}