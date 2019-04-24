<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Admin\WardService as WardService;

class WardController extends Controller
{
    //
    private $wardService;

    public function __construct()
    {
    	$this->wardService = new WardService;
    }

    public function index($id = 0) 
    {
        return view('admin.ward.index', [
    		'list' => $this->wardService->all(),
            'ward' => $this->wardService->show($id)
    	]);
    }


    public function upsert(Request $request)
    {
    	$id = (int)$request->input('id', 0);
    	if($id != 0) {
            $this->wardService->update($request->all());
    	}else {
    		$this->wardService->create($request->all());
    	}
    	return redirect()->route('ward');
    }

    public function delete(Request $request) 
    {
        if($request->ajax()) {
            $id = (int)$request->input('id', 0);
            $this->wardService->delete($id);
            return response(['code' => 200]);
        }
        return response(['code' => 400]);
    }
}
