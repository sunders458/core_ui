<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vue_article')->orderBy('id', 'DESC')->get();
        return response()->json([
            "success" => true,
            "message" => "Liste des Article",
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
           // 'user_id' => 'required',
            //'categorie_id' => 'required',
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
       if ($image = $request->file('image')) {
            $destinationPath = 'articles/';
            $profileImage = Str::slug($request->title) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $article = Article::create([
            'user_id' => $request->user_id,
            'categorie_id' => $request->categorie_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'like' => $request->like,
            'image' => Str::slug($request->title) . "." . $request->file('image')->getClientOriginalExtension(),
            'description' => $request->description,
        ]);
        return response()->json([
            "success" => true,
            "message" => "Article created successfully.",
            "data" => $article
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        if (is_null($article)) {
            return $this->sendError('article non trouvé.');
        }
        return response()->json([
            "success" => true,
            "message" => "article récupéré avec succès.",
            "data" => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'categorie_id' => 'required',
            'title' => 'required',
        ]);

        $article = Article::find($id);
        $article->user_id =  $request->get('user_id');
        $article->categorie_id =  $request->get('categorie_id');
        $article->title =  $request->get('title');
        $article->slug =  Str::slug($request->get('title'));
        $article->photo =  $request->get('photo');
        $article->description =  $request->get('description');
        $article->save();
        return response()->json([
            "success" => true,
            "message" => "article retrieved successfully.",
            "data" => $article
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return response(null, 204);
    }
}
