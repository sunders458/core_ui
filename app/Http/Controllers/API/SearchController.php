<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Eglise;
use App\Models\Region;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($id) {
        $search = Eglise::where('region_id', $id)->get();
        return response()->json([
            "success" => true,
            "message" => "Eglise List",
            "data" => $search
        ]);
    }
}
