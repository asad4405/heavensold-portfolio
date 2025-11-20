<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::where('status',1)->latest()->get();
        return view('Backend.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider                 = new Slider();
        $slider->title          = $request->title;
        $slider->short_details  = $request->short_details;
        $slider->btn_name       = $request->btn_name;
        $slider->btn_link       = $request->btn_link;
        $slider->status         = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/slider/';
            $image->move($imagePath, $imageName);

            $slider->image   = $imagePath . $imageName;
        }
        $slider->save();
        return back()->with('success','Slider Created!');
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
        $slider = Slider::find($id);
        return view('Backend.pages.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider                 = Slider::find($id);
        $slider->title          = $request->title;
        $slider->short_details  = $request->short_details;
        $slider->btn_name       = $request->btn_name;
        $slider->btn_link       = $request->btn_link;
        $slider->status         = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($slider->image) && file_exists($slider->image)) {
                unlink($slider->image);
            }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/slider/';
            $image->move($imagePath, $imageName);

            $slider->image   = $imagePath . $imageName;
        }
        $slider->update();
        return redirect()->route('admin.slider.index')->with('success','Slider Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if (!is_null($slider->image) && file_exists($slider->image)) {
            unlink($slider->image);
        }

        $slider->delete();
        return back()->with('success','Slider Deleted!');
    }
}
