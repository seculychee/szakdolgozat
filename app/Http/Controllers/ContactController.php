<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController{

    private $var;

    public function regStart(Request $request){

        $validation = $this->validationReg($request->all());
        if($validation->fails())
            return redirect(route('regGet'))
                ->withErrors($validation->errors()->all())
                ->withInput();
        // CONTACT create
        $contact = $this->crateContact($request->only('firstName','lastName','phone','email','languageCode'));
        //Prepare array for user create
        //$array = $request->only('email','password').array(['contact_id' => $contact->id]);
        //$asd = $contact->id;
        //$data = array_merge($request->only(["email", "password"]),["contact_id" => 1]);
        //$request->all()['contact_id'] = $contact->id;
        //add contact id to prepared array
        //$array["contact_id"] = $contact->id;
        //$array += ["contact_id" => $contact->id];
        //create user from prepared array

        //RegisterController::create($data);
        User::create([
            'email'         => $request->all()['email'],
            'password'      => $request->all()['password'],
            'contact_id'    => $contact->id,
        ]);

        //return redirect()->route("regGet")->with('successMsg', 'registration.success');
        return view('pages.test',[
            'success'              => "registration.success",
        ]);
    }

    public function crateContact($data){
        return $contact = Contact::create($data);
    }

    public function validationReg(array $data){

        $message = [
            "firstName.required"    => "validation.firstNameRequired",
            "firstName.min"         => "validation.firstNameMin",
            "firstName.max"         => "validation.firstNameMax",

        ];
        $rule = [
            'firstName'     => 'required|min:2|max:50',
            //'email'         => 'unique:user',
            //'password'      =>  'confirmed'
        ];
        return Validator::make($data,$rule,$message);
    }
}