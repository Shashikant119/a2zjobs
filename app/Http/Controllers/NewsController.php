<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news');
    }
    function resize_image(Request $request)
    {
        $this->validate($request, [
              'image'  =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2028'
        ]);

        $image = $request->file('image');

        $image_name = time() . '.' . $image->
        getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail');

        $resize_image = image::make($image->getRealPath());

        $resize_image->resize(150, 150, function($constraint)
          {
            $constraint->aspectRetio();
          })->save($destinationPath . '/' . $image_name);

        $destinationPath = public_path('/image');
        $image->move($destinationPath, $image_name);  

        return back()
        ->with('success', 'Image Upload success')
        ->with('imageName', $image_name);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$path=$request->file('image')->store('avatars');
        return view('news')->with('path',$path)->with('success');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
