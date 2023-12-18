<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();
        return view('admin.sections.index' , compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        
         
        Section::create($request->validated());
        return redirect()->route('section.index')->with('success' , __('custom.Section added successfully'));    
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
        $section = Section::findOrFail($id);
        return view('admin.sections.edit' , compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, string $id)
    {
        $section = Section::findOrFail($id);
        $section->update($request->validated);

        return redirect()->route('section.index')->with('success' , __('custom.Section updated successfully'));    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('section.index')->with('success' , __('custom.Section deleted successfully'));    

    }

    public function changeStatus($id)
    {
        $section = Section::findOrFail($id);
        $section->status = ! $section->status;
        $section->save();
        if($section->status == 1)
        {
            return redirect()->route('section.index')->with('success' , __('custom.Section activated successfully'));    

        }else{
            return redirect()->route('section.index')->with('success' , __('custom.Section deactivated successfully'));    

        }
    }
}
