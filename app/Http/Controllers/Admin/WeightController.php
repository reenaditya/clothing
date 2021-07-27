<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Weight;
use Illuminate\Http\Request;
use DB;

class WeightController extends Controller
{
	private $weight;

	public function __construct(Weight $weight)
	{
		$this->weight = $weight;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weights = Weight::get();
        return view('admin.weight.index',compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.weight.create');
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
     		
     		return back()->withSuccess("New weight added");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $weight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit(Weight $weight)
    {
        $weights = Weight::get();
        return view('admin.weight.update',compact('weight','weights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weight $weight)
    {
        $this->weight = $weight;

    	$this->validation($request,$weight);

        DB::beginTransaction();
    	try {
    		
    		$this->props($request)
     		->save();	
     		
     		DB::commit();
     		
     		return redirect()->route('admin.weight.index')->withSuccess("Weight updated successfully");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
        $weight->delete();
        return back()->withSuccess('Weight removed from database');
    }
    private function validation(Request $request,$weight = "")
    {
    	if ($weight) {
    		
	        $request->validate([
	        	'name' => ["required","min:2","max:255","unique:weights,name,$weight->id,id"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}else{

	    	$request->validate([
	        	'name' => ["required","min:2","max:255","unique:weights,name"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}

        return $this;
    }
    private function props(Request $request)
    {
    	$this->weight->name = $request->name;
        $this->weight->status = $request->status?true:false;
        
        return $this;
    }
    private function save()
    {
    	$this->weight->save();
    	return $this;
    }
}
