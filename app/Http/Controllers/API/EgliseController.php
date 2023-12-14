<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Eglise;
use Illuminate\Http\Request;

class EgliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eglise::orderBy('name','ASC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des Eglise",
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eglise  $eglise
     * @return \Illuminate\Http\Response
     */
    public function show(Eglise $eglise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eglise  $eglise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eglise $eglise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eglise  $eglise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eglise $eglise)
    {
        //
    }
}
