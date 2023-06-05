<?php

namespace App\Http\Controllers\Auth;

use App\Models\Loker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() 
    {
        return view('pages.auth.login');
    }
    
    public function login(Request $request) 
    {
        $credentials = $request->only(['email', 'password']);
        // dd($credentials);

        if(!Auth::validate($credentials)):
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        if ($user->role_id == 1) {
            return redirect()->route('admin.loker.index');
        }elseif ($user->role_id == 2) {
            return redirect()->route('frontend.index');
        }

        // return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
