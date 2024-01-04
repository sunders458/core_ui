<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\Pays;
use App\Models\User;
use App\Models\Bien;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = User::orderBy('name','ASC')->where('type',1)->paginate(10);
        return view('customers.customerIndex',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','name')->all();
        $lgmts = Bien::orderBy('updated_at','ASC')->get();
        $countries = Pays::all();
        return view('customers.customerCreate',compact('roles','countries','lgmts'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'bien_id'=>'required',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt('password');
        $input['type'] = 1;
        $role = Role::where('name','Abonnés')->first();
        $client = User::create($input);
        $client->assignRole($role->id);
        if($biens=$request->input('bien_id',[]))
        {
            foreach ($biens as $bienId) {
                $bien = Bien::findOrFail($bienId);
                $bien->client_id = $client->id;
                $bien->save();
            }
        }
        return redirect()->route('clients.index')
            ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
