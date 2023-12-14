<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BesoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vue_besoin')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des besoins",
            "data" => $data
        ]);
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'libelle' => 'required',
            'pasteur_id' => 'required',
            'mission_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $besoin = Besoin::create([
            'libelle' => $request->libelle,
            'pasteur_id' => $request->pasteur_id,
            'mission_id' => $request->mission_id,
            'montant' => $request->montant,
            'observation' => $request->observation,
            'delais' => $request->delais,
        ]);

        return response()->json([
            "success" => true,
            "message" => "besoin created successfully.",
            "data" => $besoin
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $besoin = Besoin::find($id);
        if (is_null($besoin)) {
            return $this->sendError('besoin non trouvé.');
        }
        return response()->json([
            "success" => true,
            "message" => "besoin récupéré avec succès.",
            "data" => $besoin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function edit(Besoin $besoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required',
            'pasteur_id' => 'required',
            'mission_id' => 'required',
        ]);

        $besoin = Besoin::find($id);
        $besoin->libelle =  $request->get('libelle');
        $besoin->pasteur_id =  $request->get('pasteur_id');
        $besoin->mission_id =  $request->get('mission_id');
        $besoin->montant =  $request->get('montant');
        $besoin->observation =  $request->get('observation');
        $besoin->delais =  $request->get('delais');
        $besoin->status =  $request->get('status');
        $besoin->save();
        return response()->json([
            "success" => true,
            "message" => "besoin retrieved successfully.",
            "data" => $besoin
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Besoin  $besoin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $besoin = Besoin::find($id);
        $besoin->delete();
        return response(null, 204);
    }
}
