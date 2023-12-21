<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::all();
        return view('admin.information.index' , compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.information.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InformationRequest $request)
    {
        Information::create($request->validated());
        return redirect()->route('information.index')->with('success' , __('custom.Information added successfully'));
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
        $information = Information::findOrFail($id);
        return view('admin.information.edit' , compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InformationRequest $request, string $id)
    {
        $information = Information::findOrFail($id);
        $information->update($request->validated());
        return redirect()->route('information.index')->with('success' , __('custom.Information updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $information = Information::findOrFail($id);
        $information->delete();
        return redirect()->route('information.index')->with('success' , __('custom.Information deleted successfully'));

    }

    public function changeStatus($id)
    {
        $information = Information::findOrFail($id);
        $information->status = ! $information->status;
        $information->save();
        if($information->status == 1)
        {
            return redirect()->route('information.index')->with('success' , __('custom.Information activated successfully'));    

        }else{
            return redirect()->route('information.index')->with('success' , __('custom.Information deactivated successfully'));    

        }
    }
}
