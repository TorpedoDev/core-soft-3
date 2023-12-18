<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\Admin\AboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index' , compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
        $data = $request->validated();
        $imageName = time().'.'.$request->image->extension();
        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        $videoImageName = time().'.'.$request->video_image->extension();
        // Public Folder
        $request->video_image->move(public_path('images'), $videoImageName);

        About::create([
            'title_ar'  => $request->title_ar ,
             'title_en' => $request->title_en , 
            'image' => $imageName , 
            'imagedesc_ar' => $request->imagedesc_ar ,
             'imagedesc_en' => $request->imagedesc_en ,
             'videodesc_ar' => $request->videodesc_ar , 
            'videodesc_en' => $request->videodesc_en , 
            'video_image' => $videoImageName ,
             'video_link' => $request->video_link
        ]);
        return redirect()->route('about.index')->with('success' , __('custom.About added successfully'));

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
        $about = About::findOrFail($id);
        return view('admin.about.edit' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request, string $id)
    {
        $about = About::findOrFail($id);
        $data = $request->validated();
        if($request->has('image'))
        {
            if(file_exists(public_path('images/'.$about->image)))
        {
            unlink(public_path('images/'.$about->image));
        }
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);

            $data['image'] = $imageName;
        }

        if($request->has('video_image'))
        {
            if(file_exists(public_path('images/'.$about->video_image)))
        {
            unlink(public_path('images/'.$about->video_image));
        }
            $videoImageName = time().'.'.$request->video_image->extension();

            // Public Folder
            $request->video_image->move(public_path('images'), $videoImageName);

            $data['video_image'] = $videoImageName;
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success' , __('custom.About updated successfully'));    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        if(file_exists(public_path('images/'.$about->image)))
        {
            unlink(public_path('images/'. $about->image));

        }

        if(file_exists(public_path('images/'.$about->video_image)))
        {
            unlink(public_path('images/'. $about->video_image));

        }

        $about->delete();
        return redirect() ->route('about.index')->with('success' , __('custom.About deleted successfully'));    

    }

    public function changeStatus($id)
    {
        $about = About::findOrFail($id);
        $about->status = ! $about->status;
        $about->save();
        if($about->status == 1)
        {
            return redirect()->route('about.index')->with('success' , __('custom.About activated successfully'));    

        }else{
            return redirect()->route('about.index')->with('success' , __('custom.About deactivated successfully'));    

        }
    }
}
