<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vue_mission')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des mission",
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
            'duree' => 'required',
            'pays' => 'required',
            'ville' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $mission = Mission::create([
            'libelle' => $request->libelle,
            'duree' => $request->duree,
            'pays' => $request->pays,
            'ville' => $request->ville,
            'pasteur_id' => $request->pasteur_id,
            'montant' => $request->montant,
        ]);
        return response()->json([
            "success" => true,
            "message" => "mission created successfully.",
            "data" => $mission
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mission = Mission::find($id);
        if (is_null($mission)) {
            return $this->sendError('mission non trouvé.');
        }
        return response()->json([
            "success" => true,
            "message" => "mission récupéré avec succès.",
            "data" => $mission
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required',
            'duree' => 'required',
            'pays' => 'required',
            'ville' => 'required',
        ]);

        $mission = Mission::find($id);
        $mission->libelle =  $request->get('libelle');
        $mission->duree =  $request->get('duree');
        $mission->pays =  $request->get('pays');
        $mission->ville =  $request->get('ville');
        $mission->pasteur_id =  $request->get('pasteur_id');
        $mission->montant =  $request->get('montant');
        $mission->status =  $request->get('status');
        $mission->save();
        return response()->json([
            "success" => true,
            "message" => "mission retrieved successfully.",
            "data" => $mission
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mission = Mission::find($id);
        $mission->delete();
        return response(null, 204);
    }
}
