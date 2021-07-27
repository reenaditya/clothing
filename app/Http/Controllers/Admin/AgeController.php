<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Age;
use Illuminate\Http\Request;
use DB;

class AgeController extends Controller
{
	private $age;

	public function __construct(Age $age)
	{
		$this->age = $age;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Age::get();
        return view('admin.age.index',compact('ages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.age.create');
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
     		
     		return back()->withSuccess("New age added");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function show(Age $age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Age $age)
    {
        $ages = Age::get();
        return view('admin.age.update',compact('age','ages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Age $age)
    {
        $this->age = $age;

    	$this->validation($request,$age);

        DB::beginTransaction();
    	try {
    		
    		$this->props($request)
     		->save();	
     		
     		DB::commit();
     		
     		return redirect()->route('admin.age.index')->withSuccess("Age updated successfully");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function destroy(Age $age)
    {
        $age->delete();
        return back()->withSuccess('Age removed from database');
    }
    private function validation(Request $request,$age = "")
    {
    	if ($age) {
    		
	        $request->validate([
	        	'name' => ["required","min:2","max:255","unique:ages,name,$age->id,id"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}else{

	    	$request->validate([
	        	'name' => ["required","min:2","max:255","unique:ages,name"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}

        return $this;
    }
    private function props(Request $request)
    {
    	$this->age->name = $request->name;
        $this->age->status = $request->status?true:false;
        
        return $this;
    }
    private function save()
    {
    	$this->age->save();
    	return $this;
    }
}
