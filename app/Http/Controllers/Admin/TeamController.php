<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Team::all();
        return view('admin.team.index' , compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            Team::create([
                'name_ar' => $request-> name_ar, 
                'name_en' => $request-> name_en , 
                'image' => $imageName , 
                'position_ar' => $request-> position_ar, 
                'position_en' => $request->position_en , 
                'facebook' => $request->facebook , 
                'twitter' => $request->twitter , 
                'linkedin' => $request->linkedin , 
                'instagram' => $request->instagram
            ]);
        }else{
            Team::create([
                'name_ar' => $request-> name_ar, 
                'name_en' => $request-> name_en , 
                'position_ar' => $request-> position_ar, 
                'position_en' => $request->position_en ,
                'image' => 'defaultmember.jpg', 
                'facebook' => $request->facebook , 
                'twitter' => $request->twitter , 
                'linkedin' => $request->linkedin , 
                'instagram' => $request->instagram
            ]);
        }

        return redirect()->route('team.index')->with('success' , __('custom.Team member added successfully'));
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
        $member = Team::findOrFail($id);
        return view('admin.team.edit' , compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id)
    {
        $member = Team::findOrFail($id);

        if($request->has('image')){
            if(file_exists(public_path('images/'.$member->image)))
            {
                unlink(public_path('images/'. $member->image));
    
            }
            $imageName = time().'.'.$request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            $member->update([
                'name_ar' => $request-> name_ar, 
                'name_en' => $request-> name_en , 
                'image' => $imageName , 
                'position_ar' => $request-> position_ar, 
                'position_en' => $request->position_en , 
                'about_ar'  => $request->about_ar, 
                'about_en' => $request->about_en,
                'facebook' => $request->facebook , 
                'twitter' => $request->twitter , 
                'linkedin' => $request->linkedin , 
                'instagram' => $request->instagram
            ]);
        }else{
            $member->update([
                'name_ar' => $request-> name_ar, 
                'name_en' => $request-> name_en , 
                'position_ar' => $request-> position_ar, 
                'position_en' => $request->position_en , 
               'image' => 'defaultmember.jpg',
                'facebook' => $request->facebook , 
                'twitter' => $request->twitter , 
                'linkedin' => $request->linkedin , 
                'instagram' => $request->instagram
            ]);
        }

        return redirect()->route('team.index')->with('success' , __('custom.Team member updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Team::findOrFail($id);
        if(file_exists(public_path('images/'.$member->image)))
        {
            unlink(public_path('images/'. $member->image));

        }
        $member->delete();
        return redirect()->route('team.index')->with('success' , __('custom.Team member deleted successfully'));    

    }

    public function changeStatus($id)
    {
        $member = Team::findOrFail($id);
        $member->status = ! $member->status;
        $member->save();
        if($member->status == 1)
        {
            return redirect()->route('team.index')->with('success' , __('custom.Team member activated successfully'));    

        }else{
            return redirect()->route('team.index')->with('success' , __('custom.Team member deactivated successfully'));    

        }
    }
}
