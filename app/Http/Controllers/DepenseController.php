<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $projet= Projet::find($id);
        return view('projetDepanseAdd',compact('projet'));
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
        $projet= Projet::find($request->input('projet_id'));
        $depense = Depense::create([
            'libelle'=>$request->input('libelle'),
            'montant'=>$request->input('montant'),
            'projet_id'=>$request->input('projet_id'),
            'user_id'=>Auth::user()->id,
        ]);
        $projet->montant_restant = $projet->montant_obtenu - $request->input('montant');
        $projet->save();
        return redirect()->route('projets.show',$request->input('projet_id'))->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function show(Depense $depense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function edit(Depense $depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depense $depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depense $depense)
    {
        //
    }
}
