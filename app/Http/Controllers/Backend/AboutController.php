<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
        return view('backend.about.index',compact('about'));
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
        //
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
        $this->validate($request,[
            'image'=>'mimes:jpeg,png,jpg',
            'title'=>'required',
            'birthday'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'degree'=>'required',
            'email'=>'required',
            'long_description'=>'required',
        ]);
        $data = $request->all();
        $about = About::findOrFail($id);
        if($request->hasFile('image')){
            $image_path = $about->image;
            if($image_path!=null){
                unlink($image_path);
            }
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(600,600)->save('storage/profile-photos/'.$name_gen);
            $image_url = 'storage/profile-photos/'.$name_gen;
        }else{
            $image_url = $about->image;
        }
        $data['image']=$image_url;
        $about->update($data);
        toast('About section updated!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->route('about.index');
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
