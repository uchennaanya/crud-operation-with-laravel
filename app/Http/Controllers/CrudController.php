<?php

namespace App\Http\Controllers;

use App\Crud;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       echo 'Hello world';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	
	 public function record()
    {
       
		$cruds = Crud::all();
		 
		 
		return view('record')->with('cruds', $cruds);
		 
		 
    }

    public function create()
    {
        
		
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$cruds = new Crud;
		
		$cruds->name = $request->name;
		$cruds->phone = $request->phone;
		$cruds->state = $request->state;
		
		$cruds->save();
		
		return redirect()->back();
		
		
    }
	
	public function delete($id) {
		
		$cruds = Crud::find($id);
		
		$cruds->delete();
		
		return redirect()->back();
	}
	
	public function update($id) {
		
		$cruds = Crud::find($id);
		
		return view('update')->with('crud', $cruds);
	}
	
	public function save(Request $request, $id) {
		
		$cruds = Crud::find($id);
		
		$cruds->name = $request->name;
		$cruds->phone = $request->phone;
		$cruds->state = $request->state;
		
		$cruds->save();
		
		return redirect()->back();
		
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        echo 'Viewed';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        echo 'Edited';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Crud $crud)
//    {
//        return view('update');
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
       
    }
}
