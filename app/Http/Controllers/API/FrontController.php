<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CotisationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
       if(!empty(request('q'))){
            $data['data'] = DB::table('vue_user')->where('rolesId','3')->where('userName', 'like', '%' . request('q') . '%')->get();
            return response()->json($data);
        }else{
            return $this->refresh();
        }
    }
    public function fideles()
    { 
       if(!empty(request('q'))){
            $data['data'] = DB::table('vue_user')->where('rolesId','1')->where('userName', 'like', '%' . request('q') . '%')->get();
            return response()->json($data);
        }else{
            return $this->refreshFidele();
        }
    }
     public function fidelesShow($id)
    {
        $data = DB::table('vue_user')->where('rolesId','1')->where('id', $id)->find($id);
        return response()->json([
            "success" => true,
            "message" => "Fidèle",
            "data" => $data
        ]);
    }
    
    public function show($id)
    {
        $data = DB::table('vue_user')->where('rolesId','3')->where('id', $id)->find($id);
        return response()->json([
            "success" => true,
            "message" => "missionnaire",
            "data" => $data
        ]);
    }
    
    private function refresh()
    {
        $data = DB::table('vue_user')->where('rolesId','3')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des missionnaire",
            "data" => $data
        ]);
    }
    private function refreshFidele()
    {
        $data = DB::table('vue_user')->where('rolesId','1')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des fideles",
            "data" => $data
        ]);
    }
}
