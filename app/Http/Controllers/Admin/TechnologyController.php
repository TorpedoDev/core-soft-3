<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TechnologyRequest;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index' , compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TechnologyRequest $request)
    {
        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images') , $imageName);
         
        Technology::create(['logo' => $imageName]);
        return redirect()->route('technology.index')->with('success' , __('custom.Technology added successfully'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $technology = Technology::findOrFail($id);
        return view('admin.technologies.edit' , compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TechnologyRequest $request, string $id)
    {
        $technology = Technology::findOrFail($id);
        if($request->has('logo'))
        {
            unlink(public_path('images/'.$technology->logo));
        }

        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images') , $imageName);
        $technology->update(['logo' => $imageName]);
        return redirect()->route('technology.index')->with('success' , __('custom.Technology updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $technology = Technology::findOrFail($id);
  
        if(file_exists(public_path('images/'.$technology->logo)))
        {
            unlink(public_path('images/'.$technology->logo));

        }
        $technology->delete();
        return redirect()->route('technology.index')->with('success' , __('custom.Technology deleted successfully'));

    }

    public function changeStatus($id)
    {
        $technology = Technology::findOrFail($id);
        $technology->status = !$technology->status;
        $technology->save();
        if($technology->status == 1)
        {
            return redirect()->route('technology.index')->with('success' , __('custom.Technology activated successfully'));

        }else{
            return redirect()->route('technology.index')->with('success' , __('custom.Technology deactivated successfully'));

        }
    }
}
