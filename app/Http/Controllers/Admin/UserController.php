<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::whereRole(false)->get();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
     		
     		return back()->withSuccess("New user added");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->user = $user;

    	$this->validation($request,$user);

        DB::beginTransaction();
    	try {
    		
    		$this->props($request,$user)
     		->save();	
     		
     		DB::commit();
     		
     		return back()->withSuccess("User updated successfully");


    	} catch (Exception $e) {
    		
    		DB::rollback();

    		return back()->withError($e->getMessage());
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->withSuccess('User removed from database');
    }
    private function validation(Request $request,$user = "")
    {
    	if ($user) {
    		
	        $request->validate([
	        	'name' => ["required","min:2","max:255"],
	        	'email' => ["required","email","max:255","unique:users,email,$user->id,id"],
	        	'phone_number' => ["required","numeric","unique:users,phone_number,$user->id,id"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}else{

	    	$request->validate([
	        	'name' => ["required","min:2","max:255"],
	        	'email' => ["required","email","max:255","unique:users,email"],
	        	'phone_number' => ["required","numeric","unique:users,phone_number"],
	        	'status' => ["sometimes","boolean"]
	        ]);
    	}

        return $this;
    }
    private function props(Request $request,$user = "")
    {
    	$this->user->name = $request->name;
    	$this->user->email = $request->email;
    	$this->user->phone_number = $request->phone_number;
        $this->user->status = $request->status?true:false;
        if (empty($user)) {
        	$this->user->password = \Str::random(8);
        }
        
        return $this;
    }
    private function save()
    {
    	$this->user->save();
    	return $this;
    }
}
