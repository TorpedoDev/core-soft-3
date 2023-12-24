<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
     public function profile()
     {
        $user = Auth::user();
        return view('admin.settings.profile' , compact('user'));
     }

     public function changeData(Request $request){
        $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:80'
        ] , [
            'name.required' => __('custom.Name is required'),
            'name.string' => __('custom.Name must be text'),
            'name.max' => __('custom.Name must be less than 60'),
            'email.required' => __('custom.email is required'),
            'email.email' => __('custom.email must be valid'),
            'email.max' => __('custom.email must be less than 80 charachter')
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' =>$request->email,
        ]);

        return redirect()->back()->with('success', __('custom.Account data has been edited successfully'));

     }


     public function updatePass(Request $request)
     {
         $user = Auth::user();
 
         $request->validate([
             'old_pass' => ['required', new MatchOldPassword()],
             'new_pass' => ['required', 'min:6'],
             'confirm_new_pass' => 'required_with:new_pass|same:new_pass'
         ],[
            'old_pass.required' => __('custom.Old password is required'),
            
         ]);
 
             $user->update(['password' => Hash::make($request->new_password)]);
             return redirect()->back()->with('success', __('custom.Password has been edited successfully'));
         }
}
