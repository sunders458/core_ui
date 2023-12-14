<?php

namespace App\Http\Controllers;

use App\Models\TypeCotisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeCotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TypeCotisation::all();
        return response()->json([
            "success" => true,
            "message" => "Liste de type Cotisation",
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
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $type = TypeCotisation::create($input);
        return response()->json([
            "success" => true,
            "message" => "type created successfully.",
            "data" => $type
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeCotisation  $typeCotisation
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCotisation $typeCotisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeCotisation  $typeCotisation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCotisation $typeCotisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeCotisation  $typeCotisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $type = TypeCotisation::find($id);
        $type->name =  $request->get('name');
        $type->save();
        return response()->json([
            "success" => true,
            "message" => "type retrieved successfully.",
            "data" => $type
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeCotisation  $typeCotisation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = TypeCotisation::find($id);
        $type->delete();
        return response(null, 204);
    }
}
