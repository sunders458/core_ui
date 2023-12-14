<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryGallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories =CategoryGallerie::all();
        $i=0;
        return view('categories.categoriesGallerieIndex',compact('categories','i'));
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
         //
        $input = $request->all();
        $validator = Validator::make($input, [
            'libelle' => 'required',
        ]);
        $categorie = CategoryGallerie::create($input);
        return redirect()->route('categoriegallerie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryGallerie  $categoryGallerie
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryGallerie $categoryGallerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryGallerie  $categoryGallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryGallerie $categoryGallerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryGallerie  $categoryGallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryGallerie $categoryGallerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryGallerie  $categoryGallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryGallerie $categoryGallerie)
    {
        //
    }
}
