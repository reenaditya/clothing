<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Height;
use Illuminate\Http\Request;
use DB;

class HeightController extends Controller
{
	private $height;

	public function __construct(Height $height)
	{
		$this->height = $height;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $height = Height::get();
        return view('admin.height.index',compact('height'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.height.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
    	
    	DB::beginTransaction();
    	try {

     		$this->props($request)
     		->save();	
     		
     		DB::commit();
     		
     		return back()->withSuccess("New Height added");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function show(Height $height)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function edit(Height $height)
    {
    	$heights = Height::get();
        return view('admin.height.update',compact('height','heights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Height $height)
    {
        $this->height = $height;

    	$this->validation($request,$height);

        DB::beginTransaction();
    	try {
    		
    		$this->props($request)
     		->save();	
     		
     		DB::commit();
     		
     		return redirect()->route('admin.height.index')->withSuccess("Height updated successfully");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function destroy(Height $height)
    {
        $height->delete();
        return back()->withSuccess('Height removed from database');
    }
    private function validation(Request $request,$height = "")
    {
    	if ($height) {
    		
	        $request->validate([
	        	'name' => ["required","min:2","max:255","unique:heights,name,$height->id,id"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}else{

	    	$request->validate([
	        	'name' => ["required","min:2","max:255","unique:heights,name"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}

        return $this;
    }
    private function props(Request $request)
    {
    	$this->height->name = $request->name;
        $this->height->status = $request->status?true:false;
        
        return $this;
    }
    private function save()
    {
    	$this->height->save();
    	return $this;
    }
}
