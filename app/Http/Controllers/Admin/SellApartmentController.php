<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Admin\SellApartService as SellApartService;
use App\Services\Admin\DistrictService as DistrictService;

class SellApartmentController extends Controller
{
    //
    private $sellApartService;

    public function __construct()
    {
    	$this->sellApartService = new SellApartService;
        $this->districtService = new DistrictService;
    }

    public function index($id = 0) 
    {
        return view('admin.sell-apart.index', [
    		'list' => $this->sellApartService->all(),
            'apartment' => $this->sellApartService->show($id),
            'districts' => $this->districtService->all()
    	]);
    }


    public function upsert(Request $request)
    {
    	$id = (int)$request->input('id', 0);
    	if($id != 0) {
            $this->sellApartService->update($request->all());
    	}else {
    		$this->sellApartService->create($request->all());
    	}
    	return redirect()->route('sell-apart');
    }

    public function delete(Request $request) 
    {
        if($request->ajax()) {
            $id = (int)$request->input('id', 0);
            $this->sellApartService->delete($id);
            return response(['code' => 200]);
        }
        return response(['code' => 400]);
    }
}
