<?php
namespace App\Services\Admin;

use App\SellApart as SellApart;

class SellApartService 
{
	public function all()
	{
		return SellApart::all();
	}

	public function show($id = 0)
	{
		return $id ? SellApart::find($id) : new SellApart;
	}

	public function create($input)
	{
		$input['photo'] = $this->updatePhoto($input);
		$input['furniture'] = isset($input['furniture']) ? json_encode($input['furniture']) : '';
		$input['util'] = isset($input['util']) ? json_encode($input['util']) : '';
		$rentApart = SellApart::create($input);
		return $rentApart ? true : false;
	}

	public function update($input)
	{
		$input['photo'] = $this->updatePhoto($input);
		$input['furniture'] = isset($input['furniture']) ? json_encode($input['furniture']) : '';
		$input['util'] = isset($input['util']) ? json_encode($input['util']) : '';
		$rentApart = SellApart::find($input['id'])->update($input);
		return $rentApart ? true : false;
	}

	public function delete($id = 0)
	{
		$apart = SellApart::find($id);
		$apart->delete();
	}

	private function updatePhoto($input = []) {
		$photos = json_decode($input['gallery'], true); 
		return count($photos) ? $photos[0]['src'] : '';
	}
}