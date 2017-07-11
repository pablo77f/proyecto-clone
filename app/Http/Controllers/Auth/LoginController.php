<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App;

use Auth;
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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(){
      $this->validate(request(),[
        'login' => ['required'],
        'password' => ['required']
      ]);
      $data=request()->all();

      if (Auth::attempt(['login' => $data['login'], 'password' => $data['password']])) {
          // Authentication passed...
          return redirect('/admin');
      }
      else {
        $errors=(object) ['0'=>'Error de usuario o contraseña'];
        return redirect('/admin/login')->withErrors($errors)->withInput();
      }

    }
    public function logout(){

      Auth::logout();
      return redirect('/admin/login');
    }

}
