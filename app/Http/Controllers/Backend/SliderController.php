<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    // $request->validate([
        //     // 'banner' => ['required', 'image', 'max:2000'],
        //     'type'=>['string', 'max:200'],
        //     'title'=>['required', 'max:200'],
        //     'starting_price'=>['max:200'],
        //     'btn_url'=>['url'],
        //     'serial'=>['required', 'integer'],
        //     'status'=>['required']
        // ]);

        // $slider=new Slider();

        // $slider->type = $request->type;
        // $slider->title = $request->title;
        // $slider->starting_price = $request->starting_price;
        // $slider->btn_url = $request->btn_url;
        // $slider->serial = $request->serial;
        // $slider->status = $request->status;
        // $slider->save();

        // toastr('Created Successfully', 'success');

        // return redirect()->back();

    public function store(Request $request)
    {
        dd($request->all());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
