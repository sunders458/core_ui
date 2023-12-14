<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|min:8',
            'password' => 'required|string|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $token_validity = 24 * 60;
        $this->guard()->factory()->setTTL($token_validity);
        if (!$token = $this->guard()->attempt($validator->validated())) {
            return response()->json(['error' => 'erreur de connexion !'], 401);
        }

        return $this->respondWithToken($token);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'firstname' => 'required',
            'birthday' => 'required',
            'eglise_id' => 'required',
            'phone' => 'required',
           'email' => 'required',
            'genre' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                $validator->errors()
            ], 422);
        }
        $user = User::create(array_merge(
            $validator->validated(),
            [
                'password' => bcrypt($request->password)
            ]
        ));
        return response()->json(['message' => 'Utilisateur créer avec success', 'user' => $user]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->guard()->logout();
        return response()->json(['message' => 'Déconnexion réussie']);
    }
    /*
    public function getRole(): JsonResponse
    {
        return response()->json([

        ])
    }
    */
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        return response()->json($this->guard()->user());
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'role' => Auth::user()->roles_id,
            'token_type' => 'bearer',
            'token_validity' => $this->guard()->factory()->getTTL() * 60,
        ]);
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
