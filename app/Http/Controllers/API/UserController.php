<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vue_user')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des utilisateurs",
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
            'name' => 'required',
            'firstname' => 'required',
            'phone' => 'required',
            //'roles_id' => 'required',
            //'password' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $image = $request->file('photo');
        if ($image != null) {
            if ($image) {
                $destinationPath = 'photos/';
                $profileImage = Str::slug($request->phone) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['photo'] = "$profileImage";
            }

            $user = User::create([
                'name' => $request->name,
                'firstname' => $request->firstname,
                'photo' => Str::slug($request->phone) . "." . $request->file('photo')->getClientOriginalExtension(),
                'birthday' => $request->birthday,
                'bapteme' => $request->bapteme,
                'genre' => $request->genre,
                'solde' => $request->solde,
                'eglise_id' => $request->eglise_id,
                'roles_id' => $request->roles_id,
                'phone' => str_replace(' ', '', $request->phone),
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
        }else{
            $user = User::create([
                'name' => $request->name,
                'firstname' => $request->firstname,
                'birthday' => $request->birthday,
                'bapteme' => $request->bapteme,
                'genre' => $request->genre,
                'solde' => $request->solde,
                'eglise_id' => $request->eglise_id,
                'roles_id' => $request->roles_id,
                'phone' => str_replace(' ', '', $request->phone),
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Utilisateur créer avec success.",
            "data" => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->sendError('utilisateur non trouvé.');
        }
        return response()->json([
            "success" => true,
            "message" => "utilisateur récupéré avec succès.",
            "data" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'eglise_id' => 'required',
            'phone' => 'required',
            'roles_id' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->lastname =  $request->get('lastname');
        $user->photo =  $request->get('photo');
        $user->birthday =  $request->get('birthday');
        $user->bapteme =  $request->get('bapteme');
        $user->genre =  $request->get('genre');
        $user->solde =  $request->get('solde');
        $user->eglise_id =  $request->get('eglise_id');
        $user->roles_id =  $request->get('roles_id');
        $user->phone = str_replace(' ', '', $request->get('phone'));
        $user->status = $request->get('status');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return response()->json([
            "success" => true,
            "message" => "utilisateur modifier avec succès.",
            "data" => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = User::find($id);
        $type->delete();
        return response(null, 204);
    }
}
