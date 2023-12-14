<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome(){
        $actualites = Article::Where('categorie_id',1)->get();
        
        return view('welcome',compact('actualites'));
    }

    public function article_details($slg)
    {
        $article = Article::where('slug',$slg)->first();
        return  view('pages.articleDetails',compact('article'));
    }
}
