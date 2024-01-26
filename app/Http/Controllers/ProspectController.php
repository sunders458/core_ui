<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\Pays;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bien;
use App\Models\Cotisation;
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

    public function prospects(Request $request)
    {
        //
        $data = User::orderBy('name','ASC')
            ->where('type','0')->with('bien')
            ->whereHas('bien',function($query){
                $query->whereNull('client_id');
            })->paginate(20);
            
        return view('customers.prospect.allprospects',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function transform($id)
    {
        //
        $prospect = User::find($id);
        $countries = Pays::pluck('libelle','id')->all();
        $interrest  = Bien::get();
        $bycountries = $prospect->countries->pluck('libelle','id')->all();
        // dd($bycountries);
        $myinterrest = $prospect->bien->pluck('id')->all();
        // dd($myinterrest);
        $selectedPays=$prospect->pays_id;
        return view('customers.prospect.prospectTransform',compact('prospect','countries','bycountries','myinterrest','interrest','selectedPays'));
    }

    public function souscript(Request $request)
    {
        $prospect = User::find($request->user_id);
        if($prospect){
            foreach ($request->souscription as $index => $souscription) {
                Cotisation::create([
                    'montant' => $souscription,
                    // 'cotisation' => $request->cotisation[$index],
                    // 'description' => $request->description[$index],
                    'type_cotisation_id'=>1,
                    'projet_id' => $request->projet[$index],
                    'user_id' => $request->user_id,
                    'user_validate_id'=>Auth::user()->id,
                ]);
                $bien = Bien::find($request->projet[$index]);
                $bien->client_id = $request->user_id;
                $bien->save();
            }
            foreach ($request->cotisation as $index => $cotisation) {
                Cotisation::create([
                    'montant' => $cotisation,
                    // 'cotisation' => $request->cotisation[$index],
                    // 'description' => $request->description[$index],
                    'type_cotisation_id'=>2,
                    'projet_id' => $request->projet[$index],
                    'user_id' => $request->user_id,
                    'user_validate_id'=>Auth::user()->id,
                ]);
            };
            
            $prospect->type =  1;
            $prospect->save();

            dd('ok');
        }

        
       
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
        $prospect = User::find($id);
      
        $countries = Pays::pluck('libelle','id')->all();
        $bycountries = $prospect->countries->pluck('libelle','id')->all();
        $myinterrest = $prospect->bien->pluck('id')->all();
        $interrest  = Bien::get();
        $selectedPays=$prospect->pays_id;
       
        return view('customers.prospect.prospectEdit',compact('prospect','countries','bycountries','myinterrest','interrest','selectedPays'));
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
        $input = $request->all();
        $user = User::find($id);
        $user->update($input);

        $input['pays_id'] = $request->input('pays_id');
        $user->countries()->associate($input['pays_id']);

        $input['bien_id'] = $request->input('bien_id');
        $user->bien()->sync($input['bien_id']);

        return redirect()->route('prospects.index')
        ->with('success','User created successfully');
;
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
