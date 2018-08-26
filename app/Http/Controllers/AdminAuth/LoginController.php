<?php

namespace App\Http\Controllers\AdminAuth;

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
    protected $redirectTo = '/admin/dashboard';
    protected $redirectAfterLogout = '/admin';

    /*
    Using Admin Guard
    */

    protected function guard()
    {
        return auth()->guard('admin');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
      $this->guard()->logout();
      $request->session()->invalidate();

      return redirect()->route('admin.login');
    }


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('adminGuest')->except('logout');
    }
}
