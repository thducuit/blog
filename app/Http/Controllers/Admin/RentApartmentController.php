<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Admin\RentApartService as RentApartService;
use App\Services\Admin\DistrictService as DistrictService;


class RentApartmentController extends Controller
{
    //

    private $rentApartService;
    private $districtService;


    public function __construct()
    {
    	$this->rentApartService = new RentApartService;
        $this->districtService = new DistrictService;
    }

    public function index($id = 0) 
    {
        return view('admin.rent-apart.index', [
    		'list' => $this->rentApartService->all(),
            'apartment' => $this->rentApartService->show($id),
            'districts' => $this->districtService->all()
    	]);
    }


    public function upsert(Request $request)
    {
    	$id = (int)$request->input('id', 0);
    	if($id != 0) {
            $this->rentApartService->update($request->all());
    	}else {
    		$this->rentApartService->create($request->all());
    	}
    	return redirect()->route('rent-apart');
    }

    public function delete(Request $request) 
    {
        if($request->ajax()) {
            $id = (int)$request->input('id', 0);
            $this->rentApartService->delete($id);
            return response(['code' => 200]);
        }
        return response(['code' => 400]);
    }
}
