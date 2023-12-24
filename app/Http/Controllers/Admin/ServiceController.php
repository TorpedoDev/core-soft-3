<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        // $imageName = time().'.'.$request->logo->extension();

        // // Public Folder
        // $request->logo->move(public_path('images'), $imageName);
        
         
        Service::create($request->validated());
        return redirect()->route('service.index')->with('success' , __('custom.Service added successfully'));  
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
        $service = Service::findOrFail($id);
        return view('admin.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, string $id)
    {
        $service = Service::findOrFail($id);
            $service->update($request->validated());
        
        return redirect()->route('service.index')->with('success' , __('custom.Service updated successfully'));  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success' , __('custom.Service deleted successfully'));  

    }

    public function changeStatus($id)
    {
        $service = Service::findOrFail($id);
        $service->status = ! $service->status;
        $service->save();
        if($service->status == 1)
        {
            return redirect()->route('service.index')->with('success' , __('custom.Service activated successfully'));    

        }else{
            return redirect()->route('service.index')->with('success' , __('custom.Service deactivated successfully'));    

        }
    }
}
