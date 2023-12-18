<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppRequest;
use Illuminate\Http\Request;
use App\Models\App;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apps = App::all();
        return view('admin.apps.index' , compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.apps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppRequest $request)
    {
        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);
        
        App::create([
            'name_en' => $request-> name_en, 
            'name_ar' => $request-> name_ar,
             'description_en' => $request->description_en , 
             'description_ar' => $request->description_ar ,
             'type' => $request->type, 
             'image' => $imageName
        ]);

        return redirect()->route('app.index')->with('success' , __('custom.App added successfully'));
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
        $app = App::findOrFail($id);
        return view('admin.apps.edit' , compact('app'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppRequest $request, string $id)
    {
        $app = App::findOrFail($id);
        if($request->has('image'))
        {
            unlink(public_path('images/'.$app->image));

            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
    
            $app->update([
                'name_en' => $request-> name_en, 
                'name_ar' => $request-> name_ar, 
                'image' => $imageName , 
                'description_en' => $request-> description_en, 
                'description_ar' => $request->description_ar ,
                'type' => $request->type, 
            ]);
        }else{

            $app->update([
                'name_en' => $request-> name_en, 
                'name_ar' => $request-> name_ar, 
                'description_en' => $request-> description_en, 
                'description_ar' => $request->description_ar , 
                'type' => $request->type,

            ]);
        }

        return redirect()->route('app.index')->with('success' , __('custom.App updated successfully'));    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $app = App::findOrFail($id);
        if(file_exists(public_path('images/'.$app->image)))
        {
            unlink(public_path('images/'. $app->image));

        }
        $app->delete();
        return redirect()->route('app.index')->with('success' , __('custom.App deleted successfully'));    

    }

    public function changeStatus($id)
    {
        $app = App::findOrFail($id);
        $app->status = ! $app->status;
        $app->save();
        if($app->status == 1)
        {
            return redirect()->route('app.index')->with('success' , __('custom.App activated successfully'));    

        }else{
            return redirect()->route('app.index')->with('success' , __('custom.App deactivated successfully'));    

        }
    }
}
