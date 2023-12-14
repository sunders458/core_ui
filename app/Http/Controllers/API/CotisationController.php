<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cotisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vue_cotisation')->orderBy('id', 'DESC')->get();
        //$data = Cotisation::orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des Cotisation",
            "data" => $data
        ]);
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
            'user_id' => 'required',
            'montant' => 'required',
            'besoin_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $cotisation = Cotisation::create([
            'user_id' => $request->user_id,
            'besoin_id' => $request->besoin_id,
            'type_cotisation_id' => $request->type_cotisation_id,
            'montant' => $request->montant,
        ]);

        return response()->json([
            "success" => true,
            "message" => "cotisation created successfully.",
            "data" => $cotisation
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotisation = Cotisation::find($id);
        if (is_null($cotisation)) {
            return $this->sendError('cotisation not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "cotisation retrieved successfully.",
            "data" => $cotisation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'montant' => 'required',
            'besoin_id' => 'required',
        ]);

        $cotisation = Cotisation::find($id);
        $cotisation->user_id =  $request->get('user_id');
        $cotisation->besoin_id =  $request->get('besoin_id');
        $cotisation->type_cotisation_id =  $request->get('type_cotisation_id');
        $cotisation->montant = $request->get('montant');
        $cotisation->save();
        return response()->json([
            "success" => true,
            "message" => "cotisation retrieved successfully.",
            "data" => $cotisation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cotisation = Cotisation::find($id);
        $cotisation->delete();
        return response(null, 204);
    }
}
