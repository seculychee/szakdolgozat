<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\LoginController as BaseController;
use Validator;

class HomeController extends Controller
{
    //nem m?k�dik m�g az eg�sz ebben a projektben
    //hiba : Class App\Http\Controllers\HomeController does not exist

    use AuthenticatesUsers;

    public function showLogin()
    {
        return View::make('pages.login');
    }
    public function doLogin()
    {
                // vizsg�lati inf�k megad�sa
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

                // valid�ci�s szab�lyok megad�sa
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('pages.login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
                // valid�ci�s hib�k visszak�ld�se a formba
        } else {
            //email jelsz� authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password'),
            );

            if (Auth::attempt($userdata)) {

                // valid�ci� sikeres!
               // echo 'Sikeres!';
                return view('pages.user');
            } else {

                // valid�ci� sikertlen vissza a formra
                return Redirect::to('pages.login');
            }
        }
    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
