<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(Request $request)
    {
        // User role based on role_id 1 for applicant and 2 for employer

        $user = Auth::user();
        // dd($role->role);
        // Check user role

        switch ($user->role) {
            case "admin":
                Log::info( "Login Successful");
                $request->session()->flash("success",  "Login Successful!");               
                return route('home');
                break;
            case 2:
        Log::info( "Unauthorised Login.Access Denied!!");
        $request->session()->flash("error",  "Unauthorised Login.Access Denied!!");
        return redirect()->back();
                break;
           
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
}
