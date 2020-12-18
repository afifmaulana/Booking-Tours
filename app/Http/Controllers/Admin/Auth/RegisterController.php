<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Client;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:client');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){


        $data = new User();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        if ($data->save()){
            return redirect()->route('client.login');
        }else{
            return back()->withErrors();
        }

    }
}
