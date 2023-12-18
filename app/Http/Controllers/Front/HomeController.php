<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\App;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Team;

class HomeController extends Controller
{
    public function home()
    {
        $sections = Section::where('status' , 1)->take(4)->get();
        $about = About::where('status' , 1)->latest()->get();
        $technologies = Technology::where('status' , 1)->get();
        $services =Service::where('status' , 1)->get();
        $mobile = App::where('status' , 1)->where('type' , 'mobile')->get();
        $web = App::where('status' , 1)->where('type' , 'web')->get();
        $members = Team::where('status' , 1)->get();
        return view('front.home' , compact('sections' , 'about' , 'technologies' , 'services' , 'mobile' , 'web' , 'members'));

    }
}
