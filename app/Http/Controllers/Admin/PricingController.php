<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PricingRequest;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricing::all();
        return view('admin.pricings.index' , compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pricings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PricingRequest $request)
    {
    
        Pricing::create($request->validated());
        return redirect()->route('pricing.index')->with('success' , __('custom.Pricing added successfully'));    
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
        $pricing = Pricing::findOrFail($id);
        return view('admin.pricings.edit' , compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PricingRequest $request, string $id)
    {
        $pricing = Pricing::findOrFail($id);


    $pricing->update($request->validated());

    return redirect()->route('pricing.index')->with('success' , __('custom.Pricing updated successfully'));    



    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->delete();
        return redirect()->route('pricing.index')->with('success' , __('custom.Pricing deleted successfully'));    

    }

    public function changeStatus($id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->status = ! $pricing->status;
        $pricing->save();
        if($pricing->status == 1)
        {
            return redirect()->route('pricing.index')->with('success' , __('custom.Pricing activated successfully'));    

        }else{
            return redirect()->route('pricing.index')->with('success' , __('custom.Pricing deactivated successfully'));    

        }
    }

    public function showselected($id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->selected = ! $pricing->selected;
        $pricing->save();
        if($pricing->status == 1)
        {
            return redirect()->route('pricing.index')->with('success' , __('custom.Pricing selected successfully'));    

        }else{
            return redirect()->route('pricing.index')->with('success' , __('custom.Pricing unselected successfully'));    

        }

    }
}
