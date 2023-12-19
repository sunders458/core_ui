<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RoleController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $permission = Permission::get();
        return view('parametres.roles.role_index',compact('roles','permission'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permission = Permission::get();
        $roleinput = "role";
        $roles = Permission::where('name', 'LIKE', '%'.$roleinput.'%')->get();

        $userinput = "user";
        $users = Permission::where('name', 'LIKE', '%'.$userinput.'%')->get();

        $projetinput = "projets";
        $projets= Permission::where('name', 'LIKE', '%'.$projetinput.'%')->get();

        $articlesinput = "post";
        $articles = Permission::where('name', 'LIKE', '%'.$articlesinput.'%')->get();

        $communesinput = "communes";
        $communes = Permission::where('name', 'LIKE', '%'.$communesinput.'%')->get();

        $cotisationinput = "cotisations";
        $cotisations = Permission::where('name', 'LIKE', '%'.$cotisationinput.'%')->get();

        $depensesinput = "depenses";
        $depenses = Permission::where('name', 'LIKE', '%'.$depensesinput.'%')->get();

        $editeurinput = "editeur";
        $editeurs = Permission::where('name', 'LIKE', '%'.$editeurinput.'%')->get();

        $enregistrementinput = "Enregistrement";
        $enregistrements = Permission::where('name', 'LIKE', '%'.$enregistrementinput.'%')->get();

        $gestarticleinput = "GestArticle";
        $gestarticles = Permission::where('name', 'LIKE', '%'.$gestarticleinput.'%')->get();

        $gestcompteinput = "GestCompte";
        $gestcomptes = Permission::where('name', 'LIKE', '%'.$gestcompteinput.'%')->get();

        $gestprojetinput = "GestProjet";
        $gestprojets = Permission::where('name', 'LIKE', '%'.$gestprojetinput.'%')->get();

        $memberinput = "member";
        $members = Permission::where('name', 'LIKE', '%'.$memberinput.'%')->get();

        $parametreinput = "Paramètre";
        $parametres = Permission::where('name', 'LIKE', '%'.$parametreinput.'%')->get();

        $publicationsinput = "Publications";
        $publications = Permission::where('name', 'LIKE', '%'.$publicationsinput.'%')->get();

        $regioninput = "regions";
        $regions = Permission::where('name', 'LIKE', '%'.$regioninput.'%')->get();

        $religioninput = "religions";
        $religions = Permission::where('name', 'LIKE', '%'.$religioninput.'%')->get();

        $categoryinput = "category";
        $categories = Permission::where('name', 'LIKE', '%'.$categoryinput.'%')->get(); 

        $mediasinput = "medias";
        $medias = Permission::where('name', 'LIKE', '%'.$mediasinput.'%')->get();    

        $cotisIninput = "cotisInwait";
        $cotis = Permission::where('name', 'LIKE', '%'.$cotisIninput.'%')->get();  

        $libelleGestIninput = "Gest";
        $libellegest = Permission::where('name', 'LIKE', '%'.$libelleGestIninput.'%')->get(); 

        $enregistrementIninput = "EnregistrementTitle";
        $libellenreg = Permission::where('name', 'LIKE', '%'.$enregistrementIninput.'%')->first(); 

        $publicationsIninput = "PublicationsTitle-list";
        $libellepublications = Permission::where('name', 'LIKE', '%'.$publicationsIninput .'%')->first(); 

        $libelleparametreinput = "ParamètreTitle-list";
        $libelleparametre = Permission::where('name', 'LIKE', '%'.$libelleparametreinput.'%')->first(); 

        $libelleediteurinput = "editeur-read";
        $libellediteur = Permission::where('name', 'LIKE', '%'.$libelleediteurinput .'%')->first(); 

        return view('roleAdd',
            compact(
                'libellenreg',
                'libellepublications',
                'libelleparametre',
                'libellediteur',
                'permission',
                'roles',
                'users',
                'projets',
                'articles',
                'communes',
                'depenses',
                'cotisations',
                'editeurs',
                'enregistrements',
                'gestcomptes',
                'gestprojets',
                'members',
                'parametres',
                'regions',
                'religions',
                'categories',
                'medias',
                'cotis',
                'libellegest'
            )
        );
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
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
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
    public function edit(Request $request,$id)
    {
        //
        $role = Role::find($id);
        $permission = Permission::get();
        $theroles = Role::orderBy('id','DESC')->paginate(5);
        
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return view('parametres.roles.role_edit',compact(
            'role',
            'theroles',
            'permission',
            'rolePermissions',
        ))->with('i', ($request->input('page', 1) - 1) * 5);;

        // $roleinput = "role";
        // $roles = Permission::where('name', 'LIKE', '%'.$roleinput.'%')->get();

        // $userinput = "user";
        // $users = Permission::where('name', 'LIKE', '%'.$userinput.'%')->get();
        

        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        //     ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        //     ->all();
    
        // return view('roleEdit',
        //     compact(
        //             'role','roles',
        //             'rolePermissions',
        //             'users',
        //         ));
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
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
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
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
}
