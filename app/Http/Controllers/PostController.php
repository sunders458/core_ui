<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->user = $this->guard()->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->user->posts()->get(['id','title', 'body', 'completed', 'created_by']);
        return response()->json($posts->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'body' => 'required|string',
            'completed' => 'required|string',
            'created_by' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 400);
        }
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->title;
        $post->completed = $request->completed;
        if($this->user->posts()->save($post)){
            return response()->json([
                'status' =>true,
                'post' =>$post
            ]);
        }else{
            return response()->json([
                'status' =>false,
                'message' =>'Ooops, l\'article n\'a pas été enregistré !',
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'body' => 'required|string',
            'completed' => 'required|string',
            'created_by' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 400);
        }
        $post->title = $request->title;
        $post->body = $request->title;
        $post->completed = $request->completed;
        if($this->user->posts()->save($post)){
            return response()->json([
                'status' =>true,
                'post' =>$post
            ]);
        }else{
            return response()->json([
                'status' =>false,
                'message' =>'Ooops, l\'article n\'a pas été modifier !',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->delete()){
            return response()->json([
                'status' =>true,
                'post' =>$post
            ]);
        }else{
            return response()->json([
                'status' =>false,
                'message' =>'Ooops, l\'article n\'a pas été supprimé !',
            ]);
        }
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
