<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Admin\DistrictService as DistrictService;

class DistrictController extends Controller
{
    //
    private $districtService;

    public function __construct()
    {
    	$this->districtService = new DistrictService;
    }

    public function index($id = 0) 
    {
        return view('admin.district.index', [
    		'list' => $this->districtService->all(),
            'district' => $this->districtService->show($id)
    	]);
    }


    public function upsert(Request $request)
    {
    	$id = (int)$request->input('id', 0);
    	if($id != 0) {
            $this->districtService->update($request->all());
    	}else {
    		$this->districtService->create($request->all());
    	}
    	return redirect()->route('district');
    }

    public function delete(Request $request) 
    {
        if($request->ajax()) {
            $id = (int)$request->input('id', 0);
            $this->districtService->delete($id);
            return response(['code' => 200]);
        }
        return response(['code' => 400]);
    }
}
