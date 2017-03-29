<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Address;
use App\User;
use App\Contact;
use App\Language;
use App\UserContact;
use App\AddressUser;
use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Language::all();
    return view('auth.register')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* 
        $this->validate($request, [
            'email' => '',
            'password' => '',
            'firstname' => '',
            'lastname' => '',
            'address' => '',
            'city' => '',
            'zip' => '',
            ])
    */
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validation = $this->validationReg($request->all());
         if ($validation->fails()) 
             return redirect('/regist')
                            ->withErrors($validation->errors()->all())
                            ->withInput();
         

        $user = $this->createUser($request->only('email','password'));
        $contact = $this->createContact($request->only('firstname','lastname','language_id','phonenumber'));
        $address = $this->createAddress($request->only('address','city','zip','country'));
        UserContact::create([
            'user_id'            => $user->id,
            'contact_id'         => $contact->id,
        ]);
        AddressUser::create([
            'address_id'         => $address->id,
            'user_id'            => $user->id,
        ]);

        $request->session()->reflash();
        $request->session()->flash('success', 'Sikeres regisztráció!');
        return redirect()->route('login');
    
    }
    public function createUser($dat){
        return $contact = User::create($dat);
    }
    public function createContact($dat){
        return $contact = Contact::create($dat);
    }
    public function createAddress($dat){
        return $contact = Address::create($dat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    protected function validationReg(array $data)
    {
            $rule = [
            'email' => 'required|min:2|max:255',
            'password' => 'required|min:2|max:255',
            'confirm' => 'required|same:password|min:2|max:255',
            'firstname' => 'required|min:2|max:50',
            'lastname' => 'required|min:2|max:50',
            'phonenumber' => 'numeric|required|min:2',
            'language_id' => 'required',
            'address' => 'required|min:2|max:50',
            'city' => 'required|min:4|max:50',
            'country' => 'required|min:4|max:50',
            'zip' => 'numeric|required|min:2',
            ];

            $message = [
            'email.required' => 'validation.emailRequired',
            'email.min' => 'validation.emailMin',
            'email.max' => 'validation.emailMax',

            'password.required' => 'validation.passwordRequired',
            //'password.confirmed' => 'validation.passwordConfirmed',
            'password.min' => 'validation.passwordMin',
            'password.max' => 'validation.passwordMax',

            'confirm.required' => 'validation.passwordRequired',
            //'confirm.confirmed' => 'validation.passwordConfirmed',
            'confirm.min' => 'validation.passwordMin',
            'confirm.max' => 'validation.passwordMax',

            'firstname.required' => 'validation.firstNameRequired',
            'firstname.min' => 'validation.firstNameMin',
            'firstname.max' => 'validation.firstNameMax',

            'lastname.required' => 'validation.lastNameRequired',
            'lastname.min' => 'validation.lastNameMin',
            'lastname.max' => 'validation.lastNameMax',

            'phonenumber.required' => 'validation.phonenumberRequired',
            'phonenumber.min' => 'validation.phonenumberMin',
            'phonenumber.numeric' => 'validation.phonenumberNumeric',

            'address.required' => 'validation.addressRequired',
            'address.min' => 'validation.addressMin',
            'address.max' => 'validation.addressMax',

            'city.required' => 'validation.cityRequired',
            'city.min' => 'validation.cityMin',
            'city.max' => 'validation.cityMax',

            'zip.required' => 'validation.zipRequired',
            'zip.min' => 'validation.zipMin',
            'zip.numeric' => 'validation.zipNumeric',

            'country.required' => 'validation.countryRequired',
            'country.min' => 'validation.countryMin',
            'country.max' => 'validation.countryMax',

            'language_id.required' => 'validation.languageRequired'
            ];

        /*
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);*/
        return Validator::make($data,$rule,$message);
    }
}
