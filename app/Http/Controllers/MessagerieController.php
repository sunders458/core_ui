<?php

namespace App\Http\Controllers;

use App\Models\Messagerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessagerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Messagerie::orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des Messages",
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
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $messagerie = Messagerie::create([
            'libelle' => $request->libelle,
            'users_id' => $request->users_id,
            'pasteur_id' => $request->pasteur_id,
        ]);
        return response()->json([
            "success" => true,
            "message" => "messagerie created successfully.",
            "data" => $messagerie
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messagerie = Messagerie::find($id);
        if (is_null($messagerie)) {
            return $this->sendError('messagerie not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "messagerie retrieved successfully.",
            "data" => $messagerie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Messagerie $messagerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required',
        ]);

        $messagerie = Messagerie::find($id);
        $messagerie->user_id =  $request->get('user_id');
        $messagerie->libelle =  $request->get('libelle');
        $messagerie->pasteur_id = $request->get('pasteur_id');
        $messagerie->save();
        return response()->json([
            "success" => true,
            "message" => "messagerie retrieved successfully.",
            "data" => $messagerie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messagerie  $messagerie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messagerie = Messagerie::find($id);
        $messagerie->delete();
        return response(null, 204);
    }
}
