<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Projet;
use App\Models\Depense;
use App\Models\Cotisation;
use App\Models\Medias;
use Illuminate\Http\Request;
use DB;


class ProjetController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //
        return view('projetDashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $count = Projet::all()->count();
        $countActif = Projet::where('status', 1)->count();

        /**
         * somme du budget total
         */
        $projet = Projet::all();

        $budgetTotal = $projet->map(function($total){
            return $total->budget;
        })->sum();

        /**
         * somme du budget obtenu cotisation
         */
        $cotisations = Cotisation::whereNotNull('user_validate_id')->get();

        $cotisationTotal = $cotisations->map(function($total){
            return $total->montant;
        })->sum();

        
        /**
         * somme des dépenses
         */
        $depenses = Depense::all();

        $depenseTotal = $depenses->map(function($total){
            return $total->montant;
        })->sum();


        $partenaires =  DB::table('cotisations')->whereNotNull('user_validate_id')->distinct('user_id')->count('user_id');

        $data = Projet::orderBy('libelle','ASC')->paginate(9);
        return view('projetIndex',compact(
            'data',
            'count',
            'countActif',
            'budgetTotal',
            'cotisationTotal',
            'depenseTotal',
            'partenaires'
            ))
            ->with('i', ($request->input('page', 1) - 1) * 9);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projetAdd');
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
            'libelle' => 'required',
            'budget' => 'required',
        ]);
        $input = $request->all();
        $projet = Projet::create($input);

        $image = array();
        if($files = $request->file('image')){

            foreach($files as $file){
                //$id=$annonce->id;
                $image_name = md5(rand(100, 1000000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'images/annonces/galleries/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                //$image[]=$image_url;
                $images = Medias::create([
                    'path'=> $image_url,
                ]);
                $projet->projectbymedias()->attach($images->id);
            }
        }
        return redirect()->route('projets.index')->with('success','User created successfully');
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
        $projet= Projet::find($id);
        /**
         * somme du budget obtenu cotisation
         */
        $cotisations = Cotisation::whereNotNull('user_validate_id')->where('projet_id',$id)->get();

        $cotisationTotal = $cotisations->map(function($total){
            return $total->montant;
        })->sum();

        /**
         * somme des dépenses
         */
        $depenses = Depense::where('projet_id',$id)->get();

        $depenseTotal = $depenses->map(function($total){
            return $total->montant;
        })->sum();

        $depenses= DB::table('projetdepense')->where('projet_id',$id)->get();
       
        return view('projetShow',
                compact(
                    'projet',
                    'cotisationTotal',
                    'depenseTotal',
                    'depenses'
                )
            );
    }
    public function depenceByProjet($id)
    {
        $projet= Projet::find($id);
        /**
         * somme du budget obtenu cotisation
         */
        $cotisations = Cotisation::whereNotNull('user_validate_id')->where('projet_id',$id)->get();

        $cotisationTotal = $cotisations->map(function($total){
            return $total->montant;
        })->sum();
        /**
         * somme des dépenses
         */
        $depenses = Depense::where('projet_id',$id)->get();

        $depenseTotal = $depenses->map(function($total){
            return $total->montant;
        })->sum();

        $projetdepenses=DB::table('projetdepense')->where('projet_id',$projet->id)->get();

        return view('projetDepense',compact(
                    'projet','cotisationTotal',
                    'depenseTotal','depenses',
                    'projetdepenses'
                )
            );
    }
    public function partenaireByProjet($id)
    {
        $projet= Projet::find($id);
        /**
         * somme du budget obtenu cotisation
         */
        $cotisations = Cotisation::whereNotNull('user_validate_id')->where('projet_id',$id)->get();

        $cotisationTotal = $cotisations->map(function($total){
            return $total->montant;
        })->sum();
        /**
         * somme des dépenses
         */
        $depenses = Depense::where('projet_id',$id)->get();

        $depenseTotal = $depenses->map(function($total){
            return $total->montant;
        })->sum();

        $projetpartenaires=DB::table('projetcotisation')->whereNotNull('user_validate_id')->where('projet_id',$projet->id)->get();
        

        return view('projetpartenaire',compact(
                    'projet','cotisationTotal',
                    'depenseTotal','depenses',
                    'projetpartenaires'
                )
            );
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
