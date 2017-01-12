<?php

namespace App\Http\Controllers;


use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Validator;

class UserDataController extends  BaseController{

    function addUserData(Request $request){

        $validator = $this->validateUserData($request->all());
        if($validator->fails()){
            return redirect(route('addUserDataGet'))
                ->withErrors($validator->errors()->all())
                ->withInput()
                ;
        }else{
            Menu::create($request->all());
            //Menu::create($request->only(['name','orderNumber']));
            /*Menu::create([
                'name'  => $request->all()['name'],
                'orederNumber'  => $request->all()['orderNumber'],
            ]);*/
            return redirect(route('addUserData'));
        }

    }
    function validateUserData(array $data){
        var_dump($data);
        $message = [
            'varos.required'      => ' A város megadása kötelező',
            'varos.min'          => ' A város minimum 2 karakter legyen',
            'varos.max'          => ' A város maximum 30 karakter legyen',
            'utca.required'      => ' A utca megadása kötelező',
            'utca.min'          => ' A utca minimum 2 karakter legyen',
            'utca.max'          => ' A utca maximum 30 karakter legyen',
            'irsz.required'      => ' A irányítószám megadása kötelező',
            'irsz.min'          => ' A irányítószám minimum 4 karakter legyen',
            'irsz.max'          => ' A irányítószám maximum 4 karakter legyen',
            'tel.required'      => ' A telefonszám megadása kötelező',
            'tel.min'          => ' A telefonszám minimum 12 karakter legyen',
            'tel.max'          => ' A telefonszám maximum 15 karakter legyen',
            'orderNumber.required'    => ' A sorszám megadása kötelező',
            'orderNumber.max'        => ' A sorszám maxmimum 10 karakter lehet',
            'orderNumber.numeric'    => ' A sorszám csak szám lehet',
        ];
        $rules = [
            'varos' => 'required|min:2|max:30',
            'utca' => 'required|min:2|max:300',
            'irsz' => 'required|min:4|max:4|numeric',
            'tel' => 'required|min:12|max:15|numeric',
        ];
        return Validator::Make($data, $rules,$message);
    }
}

