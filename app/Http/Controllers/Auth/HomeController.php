<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\LoginController as BaseController;
use Validator;

class HomeController extends Controller
{
    //nem m?ködik még az egész ebben a projektben
    //hiba : Class App\Http\Controllers\HomeController does not exist

    use AuthenticatesUsers;

    public function showLogin()
    {
        return View::make('pages.login');
    }
    public function doLogin()
    {
                // vizsgálati infók megadása
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

                // validációs szabályok megadása
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('pages.login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
                // validációs hibák visszaküldése a formba
        } else {
            //email jelszó authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password'),
            );

            if (Auth::attempt($userdata)) {

                // validáció sikeres!
               // echo 'Sikeres!';
                return view('pages.user');
            } else {

                // validáció sikertlen vissza a formra
                return Redirect::to('pages.login');
            }
        }
    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
