<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
        if(!empty(Auth::user()->getRoleNames())){
            foreach(Auth::user()->getRoleNames() as $v){

                //$role = Auth::user()->role; 

                switch ($v) {
                case 'Admin':
                    return '/admin_dashboard';
                    break;
                case 'seller':
                    return '/seller_dashboard';
                    break; 
            
                default:
                    return '/home'; 
                break;
                }
            }
        }
    }
                       

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {   
        $input = $request->all();
        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required',
        ]);
        $fieldType = filter_var($request->phone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        if(auth()->attempt(array($fieldType => $input['phone'], 'password' => $input['password'])))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
