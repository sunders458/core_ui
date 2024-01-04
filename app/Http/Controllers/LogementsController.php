<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LogementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logements= Bien::where('type_bien','logement')->paginate(10);
        
        return view('logements.logement_index',compact('logements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('logements.logement_create');
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
        $input = $request->all();
        if($image=$request->file('illustration')){
            $destionationPath = $request->file('illustration')->storePublicly('images/illustrations');
            // $ext = $image->getClientOriginalName();
             //$illustrationImage = $destionationPath . $ext;
            // $image->move($destionationPath,$illustrationImage);  
            $input['illustration'] = "https://myawsimo.s3.eu-north-1.amazonaws.com/$destionationPath";
        };
        $input['type_bien']="logement";
        $biens = Bien::create($input);
        $image = array();
        if($files = $request->file('gallerie')){
            foreach($files as $file){
                $id=$biens->id;
                
                // $image_name = md5(rand(100, 1000000));
                // $ext = strtolower($file->getClientOriginalExtension());
                // $image_full_name = $image_name.'.'.$ext;
                // $upload_path = 'core_ui/images/illustrations/galleries/';
                // $image_url = $upload_path.$image_full_name;
                // $file->move($upload_path, $image_full_name);
                //

                $image_url= $file->storePublicly('images/galleries');
                $image[]=$image_url;
                $images =Gallery::create([
                    'path'=> "https://myawsimo.s3.eu-north-1.amazonaws.com/$image_url",
                    'bien_id'=>$id
                ]);
            }
        }

        

        return redirect()->route('logements.index')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logements  $logements
     * @return \Illuminate\Http\Response
     */
    public function show(Bien $biens)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logements  $logements
     * @return \Illuminate\Http\Response
     */
    public function edit(Bien $bien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logements  $logements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bien $bien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logements  $logements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bien $bien)
    {
        //
    }
}
