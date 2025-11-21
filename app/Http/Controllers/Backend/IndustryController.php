<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industries = Industry::where('status',1)->latest()->get();
        return view('Backend.pages.industry.index',compact('industries'));
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
        $industry = new Industry();
        $industry->title = $request->title;
        $industry->short_details = $request->short_details;
        $industry->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/industry/';
            $image->move($imagePath, $imageName);

            $industry->image   = $imagePath . $imageName;
        }
        $industry->save();
        return back()->with('success','Industry Created!');
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
        $industry = Industry::find($id);
        return view('Backend.pages.industry.edit',compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $industry = Industry::find($id);
        $industry->title = $request->title;
        $industry->short_details = $request->short_details;
        $industry->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($industry->image) && file_exists($industry->image)) {
                unlink($industry->image);
            }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/industry/';
            $image->move($imagePath, $imageName);

            $industry->image   = $imagePath . $imageName;
        }
        $industry->update();
        return redirect()->route('admin.industry.index')->with('success','Industry Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industry = Industry::find($id);
        if (!is_null($industry->image) && file_exists($industry->image)) {
            unlink($industry->image);
        }

        $industry->delete();
        return back()->with('success','Industry Deleted!');
    }
}
