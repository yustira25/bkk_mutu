<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('pages.auth.register',['role'=>$role]);
    }
    public function register(Request $request)
    {
        User::create([
            'role_id' => 2,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'Tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
            'jurusan' => $request->jurusan,
            'no_hp' => $request->no_hp,
        ]);

        Alert::success('Success Title', 'Success Message');
        return redirect()->route('login');

    }
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:191'],
    //         'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //         'nik' => ['required', 'string', 'max:191'],
    //         'tempat_lahir' => ['required', 'string', 'max:191'],
    //         'Tanggal_lahir' => ['required', 'date'],
    //         'alamat' => ['required', 'string', 'max:191'],
    //         'asal_sekolah' => ['required', 'string', 'max:191'],
    //         'tahun_lulus' => ['required', 'string', 'max:191'],
    //         'jurusan' => ['required', 'string', 'max:191'],
    //         'no_hp' => ['required', 'string', 'max:191'],
    //         'role_id' => ['required', 'integer'],
    //     ]);
    // }
    // public function showRegistrationForm()
    // {
    //     $roles = Role::all(); // Jika ada relasi antara user dan role
    //     return view('pages.auth.register', compact('roles'));
    // }
    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     if ($user->role_id == 1) {
    //         $redirectTo = ('pages.loker.index');
    //     } else {
    //         $redirectTo = ('pages.frontend.index');
    //     }
    
    //     $this->guard()->login($user);
    
    //     return redirect($redirectTo);
    // }


}
