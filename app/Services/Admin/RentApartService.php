<?php
namespace App\Services\Admin;

use App\RentApart as RentApart;

class RentApartService 
{
	public function all()
	{
		return RentApart::all();
	}

	public function show($id = 0)
	{
		return $id ? RentApart::find($id) : new RentApart;
	}

	public function create($input)
	{
		$input['photo'] = $this->updatePhoto($input);
		$input['furniture'] = isset($input['furniture']) ? json_encode($input['furniture']) : '';
		$input['util'] = isset($input['util']) ? json_encode($input['util']) : '';
		$rentApart = RentApart::create($input);
		return $rentApart ? true : false;
	}

	public function update($input)
	{
		$input['photo'] = $this->updatePhoto($input);
		$input['furniture'] = isset($input['furniture']) ? json_encode($input['furniture']) : '';
		$input['util'] = isset($input['util']) ? json_encode($input['util']) : '';
		$rentApart = RentApart::find($input['id'])->update($input);
		return $rentApart ? true : false;
	}

	public function delete($id = 0)
	{
		$apart = RentApart::find($id);
		$apart->delete();
	}

	private function updatePhoto($input = []) {
		$photos = json_decode($input['gallery'], true); 
		return count($photos) ? $photos[0]['src'] : '';
	}
}