<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\LegacyUi\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        // get the user from the database
        //dd($request);
        $user = User::where('email', $request->email)->first();

        if (!$user) { // check if the user actually exists
            return response()->json(["message" => "email not found"], 404);
        } else {
            if ($user->status === 0) {
                return response()->json(["message" => "This account is deactivated"], 403);
            } else if (!Hash::check($request->password, $user->password)) {
                return response()->json(["message" => "WRONG PASSWORD!"]);
            } else {
                Auth::attempt(['email' => $request->email, "password" => $request->password], true);
                return response()->json(["message" => "Successful", "code" => 200]);
            }
        }
    }


    public function formatResponse($message, $code)
    {
        if ($code > 100 && $code < 400) {
            return response()->json(["message" => "Successful", "code" => 200]);
        } else {
        }
    }
}
