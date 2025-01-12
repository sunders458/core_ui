<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SocieteController extends Controller
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
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'site_web' => 'nullable|url',
            'numero_siret' => 'required|string|unique:societes,numero_siret',
            'numero_tva' => 'nullable|string',
            'statut_juridique' => 'required|string|max:50',
            'annee_creation' => 'required|integer|digits:4',
            'dirigeant' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour le logo
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Traitement du logo
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = $logo->store('logos', 'public'); // Stocke le logo dans le dossier 'public/logos'
        }
    
        $societe = Societe::create($request->all() + ['logo' => $logoPath]);
    
        return view('parametres.index', ['societe' => null]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function show(Societe $societe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function edit(Societe $societe,$id)
    {
        //
        $societe = Societe::findOrFail($id);

        return view('parametres.index', ['societe' => $societe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    // Trouver la société à mettre à jour
    $societe = Societe::findOrFail($id);

    // Validation des données
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'telephone' => 'required|string|max:20',
        'email' => 'nullable|email',
        'site_web' => 'nullable|url',
        'numero_siret' => 'required|string|unique:societes,numero_siret,' . $societe->id,
        'numero_tva' => 'nullable|string',
        'statut_juridique' => 'required|string|max:50',
        'annee_creation' => 'required|integer|digits:4',
        'dirigeant' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Mise à jour des informations de la société
    $societe->nom = $request->input('nom');
    $societe->adresse = $request->input('adresse');
    $societe->telephone = $request->input('telephone');
    $societe->email = $request->input('email');
    $societe->site_web = $request->input('site_web');
    $societe->numero_siret = $request->input('numero_siret');
    $societe->numero_tva = $request->input('numero_tva');
    $societe->statut_juridique = $request->input('statut_juridique');
    $societe->annee_creation = $request->input('annee_creation');
    $societe->dirigeant = $request->input('dirigeant');

    // Gestion du logo
    if ($request->hasFile('logo')) {
        // Supprimer l'ancien logo si il existe
        if ($societe->logo) {
            Storage::delete($societe->logo);
        }

        // Sauvegarder le nouveau logo
        $logoPath = $request->file('logo')->store('public/logos');
        $societe->logo = basename($logoPath);
    }

    // Sauvegarder les modifications
    $societe->save();

    // Rediriger avec un message de succès
    return redirect()->route('settings.index')->with('success', 'Société mise à jour avec succès.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Societe $societe)
    {
        //
    }
}
