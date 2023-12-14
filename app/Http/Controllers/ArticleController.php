<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Categorie;
use App\Models\CategoryGallerie;
use App\Models\ImageGallery;
use Illuminate\Support\Str;
use DB;

class ArticleController extends Controller
{
    //
    public function about(){
        
        $pays = DB::table('pays')->orderBy('libelle','ASC')->get();
        return view('pages.about',compact('pays'));
    }
    public function projets(Request $request){
        $data = Projet::orderBy('libelle','ASC')->paginate(3);
        return view('pages.projets',compact('data'))->with('i', ($request->input('page', 1) - 1) * 3);
        //return view('pages.projets', compact('data'));
    }
    public function projetShow(){
        return view('pages.projetDetails');
    }
    public function temoignages(){
        return view('pages.temoignages');
    }
    public function temoignageShow(){
        return view('pages.temoignageDetails');
    }
    public function mediatheque(){
        $categories_galeries = CategoryGallerie::all();
        $galleries = ImageGallery::all();
        return view('pages.mediatheque',compact('categories_galeries','galleries'));
    }

    public function create(){
        $categories = Categorie::all();
        return view('articles.ajouterArticle',compact('categories'));
    }
}
