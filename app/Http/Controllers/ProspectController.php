<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\Pays;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bien;
use Illuminate\Support\Facades\Auth;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $data = User::orderBy('name','ASC')
            ->where('type','0')->where('user_id',Auth::user()->id)
            ->with('bien')->whereHas('bien',function($query){
                $query->whereNull('client_id');
            })->paginate(20);
            
        return view('customers.prospect.prospectIndex',compact('data'))
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
        $lgmts = Bien::orderBy('updated_at','ASC')->whereNull('client_id')->get();
        $countries = Pays::all();
        return view('customers.prospect.prospectCreate',compact('roles','countries','lgmts'));
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
        $input['user_id'] =Auth::user()->id;
        $input['password'] = bcrypt('password');
        $input['type'] = 0;
       
        $role = Role::where('name','Abonnés')->first();
        $prospect = User::create($input);
        $prospect->assignRole($role->id);

        if($request->input('bien_id')){
            $input['bien_id'] = $request->input('bien_id');
            $prospect->bien()->attach($input['bien_id']);
        }
        return redirect()->route('prospects.index')
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
