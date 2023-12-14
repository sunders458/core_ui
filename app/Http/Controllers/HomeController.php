<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\User;
use App\Models\Cotisation;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)

    {
        $data = Projet::orderBy('libelle','ASC')->paginate(5);
        return view('home',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function projectShow()
    {
        return view('projetSingle');
    }
    public function projectPaiement($id)
    {
        $projet= Projet::find($id);
        return view('projetPaiment',compact('projet'));
    }
    public function projectPaiementProcess(Request $request)
    {
        
        $this->validate($request, [
            'montant' => 'required|numeric|min:5000',
        ]);
        $input = $request->all();
        $cotisation = Cotisation::create($input);

        $soutiennotif=DB::table('projetcotisation')->where('id', $cotisation->id)->find($cotisation->id);
        $soutiennotif1= $soutiennotif->montant;

        $soutiennotif2= $soutiennotif->libelle;
        return redirect()->route('notification.paiement')
            ->with('soutiennotif1',$soutiennotif1)
            ->with('soutiennotif2',$soutiennotif2);
    }
    public function projectPaiementNotifications()
    {
        return view('notifications.paiement');
    }

    public function soutiens()
    {
        $soutiens=DB::table('projetcotisation')->where('user_validate_id',null)->get();

        $soutienstotal = $soutiens->map(function($total){
            return $total->montant;
        })->sum();
        
        return view('soutienInwait',compact('soutiens','soutienstotal'));
    }

    public function soutienConfirm($id)
    {
        
        $soutienwaiting=DB::table('projetcotisation')->where('id',$id)->find($id);
        $projet = Projet::where('id',$soutienwaiting->projet_id)->find($soutienwaiting->projet_id);
        $cotisation= Cotisation::where('id',$soutienwaiting->id)->find($soutienwaiting->id);
        try {
            DB::beginTransaction();
            $projet->montant_obtenu = $projet->montant_obtenu + $soutienwaiting->montant;
            $projet->save();
            $cotisation->user_validate_id=Auth::user()->id;
            $cotisation->save();
            DB::commit();
            return redirect()->route('project.soutiens')->with('success','Merci de continué a investir ...');
        } catch (\Exception $e) {
            DB::rollBack();  
            return redirect()->route('project.soutiens')->with('failed','erreur ...');
        }

    }
    public function myOffers()
    {
        $myOffers=DB::table('myoffer')->where('user_id',Auth::user()->id)->get();
        return view('Myoffers',compact('myOffers'));
    }
    public function soutienadd()
    {
        //$users = DB::table('userbyrole')->where('role','Partenaire')->get();
        $users =User::OrderBy('name','asc')->where('name','<>','Anonyme')->get();
        
        $projets = Projet::get();
        
        return view('soutienAdd',compact('users','projets'));
    }
    public function soutienstore(Request $request)
    {
        $input = $request->all();
        $cotisation = Cotisation::create($input);
        return redirect()->route('soutien.add')->with('success','Soutien ajouté avec succès vous pouvez consulter en cliquant sur le projet concerné ...');
    }
}
