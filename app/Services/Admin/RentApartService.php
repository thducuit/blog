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
		$rentApart = RentApart::create($input);
		return $rentApart ? true : false;
	}

	public function update($input)
	{
		$input['photo'] = $this->updatePhoto($input);
		$rentApart = RentApart::find($input['id'])->update($input);
		return $rentApart ? true : false;
	}

	private function updatePhoto($input = []) {
		$photos = json_decode($input['gallery'], true); 
		return count($photos) ? $photos[0]['src'] : '';
	}
}