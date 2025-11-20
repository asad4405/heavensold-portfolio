<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('status',1)->latest()->get();
        return view('Backend.pages.service.index',compact('services'));
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
        $service               = new Service();
        $service->title        = $request->title;
        $service->name_one     = $request->name_one;
        $service->name_two     = $request->name_two;
        $service->name_three   = $request->name_three;
        $service->name_four    = $request->name_four;
        $service->name_five    = $request->name_five;
        $service->name_six     = $request->name_six;
        $service->name_seven   = $request->name_seven;
        $service->name_eight   = $request->name_eight;
        $service->name_nine    = $request->name_nine;
        $service->name_ten     = $request->name_ten;
        $service->youtube_link = $request->youtube_link;
        $service->status       = $request->status;
        $service->save();
        return back()->with('success','Service Created!');
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
        $service = Service::find($id);
        return view('Backend.pages.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service               = Service::find($id);
        $service->title        = $request->title;
        $service->name_one     = $request->name_one;
        $service->name_two     = $request->name_two;
        $service->name_three   = $request->name_three;
        $service->name_four    = $request->name_four;
        $service->name_five    = $request->name_five;
        $service->name_six     = $request->name_six;
        $service->name_seven   = $request->name_seven;
        $service->name_eight   = $request->name_eight;
        $service->name_nine    = $request->name_nine;
        $service->name_ten     = $request->name_ten;
        $service->youtube_link = $request->youtube_link;
        $service->status       = $request->status;
        $service->update();
        return redirect()->route('admin.service.index')->with('success','Service Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return back()->with('success','Service Deleted!');
    }
}
