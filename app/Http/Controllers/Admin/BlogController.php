<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);
        
        Blog::create([
            'title_ar' => $request-> title_ar, 'title_en' => $request-> title_en,
             'content_ar' => $request->content_ar , 
             'content_en' => $request->content_en , 
             'image' => $imageName
        ]);

        return redirect()->route('blog.index')->with('success' , __('custom.Blog added successfully'));
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
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        if($request->has('image'))
        {
            unlink(public_path('images/'.$blog->image));

            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
    
            $blog->update([
                'title_ar' => $request-> title_ar, 
                'title_en' => $request-> title_en, 
                'image' => $imageName , 
                'content_ar' => $request-> content_ar, 
                'content_en' => $request->content_en , 
            ]);
        }else{

            $blog->update([
                'title_ar' => $request-> title_ar, 
                'title_en' => $request-> title_en, 
                'content_ar' => $request-> content_ar, 
                'content_en' => $request->content_en , 

            ]);
        }

        return redirect()->route('blog.index')->with('success' , __('custom.Blog updated successfully'));    

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        if(file_exists(public_path('images/'.$blog->image)))
        {
            unlink(public_path('images/'. $blog->image));

        }
        $blog->delete();
        return redirect() ->route('blog.index')->with('success' , __('custom.Blog deleted successfully'));    
        
    }

    public function changeStatus($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = ! $blog->status;
        $blog->save();
        if($blog->status == 1)
        {
            return redirect()->route('blog.index')->with('success' , __('custom.Blog activated successfully'));    

        }else{
            return redirect()->route('blog.index')->with('success' , __('custom.Blog deactivated successfully'));    

        }
    }
}
