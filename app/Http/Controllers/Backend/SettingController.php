<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        $setting = Setting::find($id);
        return view('backend.pages.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting                    = Setting::find($id);
        $setting->name              = $request->name;
        $setting->footer_text       = $request->footer_text;
        $setting->email             = $request->email;
        $setting->phone_one         = $request->phone_one;
        $setting->phone_two         = $request->phone_two;
        $setting->phone_three       = $request->phone_three;
        $setting->map               = $request->map;
        $setting->about_details     = $request->about_details;
        $setting->meta_title        = $request->meta_title;
        $setting->meta_keywords     = $request->meta_keywords;
        $setting->meta_description  = $request->meta_description;
        if ($request->file('logo')) {
            $logo = $request->file('logo');

            if (!is_null($setting->logo) && file_exists($setting->logo)) {
                unlink($setting->logo);
            }

            $imageName          = microtime('.') . '.' . $logo->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/setting/';
            $logo->move($imagePath, $imageName);

            $setting->logo   = $imagePath . $imageName;
        }
        if ($request->file('favicon')) {
            $favicon = $request->file('favicon');

            if (!is_null($setting->favicon) && file_exists($setting->favicon)) {
                unlink($setting->favicon);
            }

            $imageName          = microtime('.') . '.' . $favicon->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/setting/';
            $favicon->move($imagePath, $imageName);

            $setting->favicon   = $imagePath . $imageName;
        }
        if ($request->file('meta_metaimage')) {
            $meta_metaimage = $request->file('meta_metaimage');

            if (!is_null($setting->meta_metaimage) && file_exists($setting->meta_metaimage)) {
                unlink($setting->meta_metaimage);
            }

            $imageName          = microtime('.') . '.' . $meta_metaimage->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/setting/';
            $meta_metaimage->move($imagePath, $imageName);

            $setting->meta_metaimage   = $imagePath . $imageName;
        }
        $setting->update();
        return redirect()->back()->with('success','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
