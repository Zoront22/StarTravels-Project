<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    // redirect on login
    protected $redirectTo = '/admin';

    // show form

    public function showLoginForm()
    {
        return view('auth.form-login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // create an instance in the controller
    public function __construct()
    {
        // Middleware that prevents authenticated users from accessing the login form
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function credentials(Request $request)
    {
        // login data
        return $request->only('email', 'password');
    }

    // redirect
    protected function authenticated(Request $request, $user)
    {
        if ($user->is_admin) {
            return redirect('/admin');
        }

        return redirect()->intended($this->redirectPath());
    }
}
