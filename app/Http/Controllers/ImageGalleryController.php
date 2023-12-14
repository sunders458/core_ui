<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\CategoryGallerie;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
//use Illuminate\Support\Arr;
class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $images = ImageGallery::latest()->get();
    	return view('gallerie.gallerieIndex',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = CategoryGallerie::all();
        return view('gallerie.gallerieCreate',compact('categories'));
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
        $request->validate([
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $image = array();
        if($files = $request->file('images')){

            foreach($files as $file){
                //$id=$annonce->id;
                $image_name = rand(100, 1000000);
                $ext = strtolower($file->getClientOriginalExtension());
                
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'images/galleries/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                //$image[]=$image_url;
                
                $images = ImageGallery::create([
                    'title'=>$request->input('title'),
                    'categorie_gallerie_id'=>$request->input('category_id'),
                    'image'=> $image_url,
                ]);
               
            }
        }
      
        return redirect()->route('galleries.index')
                ->with('success','You have successfully upload image.')
                ->with('images', $images); 
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ImageGallery $imageGallery)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ImageGallery::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');
    }
}
