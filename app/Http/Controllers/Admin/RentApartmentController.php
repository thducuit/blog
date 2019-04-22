<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Admin\RentApartService as RentApartService;

class RentApartmentController extends Controller
{
    //

    private $rentApartService;

    public function __construct()
    {
    	$this->rentApartService = new RentApartService;
    }

    public function index($id = 0) 
    {
        return view('admin.rent-apart.index', [
    		'list' => $this->rentApartService->all(),
            'apartment' => $this->rentApartService->show($id)
    	]);
    }


    public function upsert(Request $request)
    {
    	$id = $request->input('id');
    	if($id) {
            $this->rentApartService->update($request->all());
    	}else {
    		$this->rentApartService->create($request->all());
    	}
    	return redirect()->route('rent-apart');
    }
}
