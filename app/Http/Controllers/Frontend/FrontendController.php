<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status',1)->get();
        $services = Service::where('status',1)->get();
        $industries = Industry::where('status',1)->get();
        return view('Frontend.pages.index',compact('sliders','services','industries'));
    }

    public function about()
    {
        return view('Frontend.pages.about');
    }

    public function contact()
    {
        return view('Frontend.pages.contact');
    }
}
