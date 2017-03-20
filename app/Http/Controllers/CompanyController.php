<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyType;
use App\Address;
use App\AddressClassroom;
use App\Classroom as Classroom;
use App\Company as Company;
use App\CompanyAddress;
use App\Language;
use App\Http\Requests;
use Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /**
    * A Company modell teljes lekérdezése a benne található kapcsolatokkal
    * együtt, majd irányítás a view\company\index.blade.php-ra a model elemeivel
    */
        $company = Company::all();
        $language = Language::all();
        $companytype = CompanyType::all();

        return view('company.index')->with('company', $company)
                                    ->with('language', $language)
                                    ->with('companytype', $companytype);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
        * Lekérdez: CompanyType és Language modelleket, majd továbbítja 
        * a view\company\create.blade.php-ra 
        */
        $data = CompanyType::all();
        $dataa = Language::all();
        return view('company.create')->with('data', $data)
                                     ->with('dataa', $dataa);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
        * Cégregisztrálásnál validáció indítása, 
        * valid függvényre ugrás.
        */
         $validat = $this->valid($request->all());
         if ($validat->fails()) 
             return redirect('/companyAdd')
                            ->withErrors($validat->errors()->all())
                            ->withInput();
         
        /**
        * Ha a validáció sikeresen hiba nélkül lezajlott, akkor adatok felvitele
        * Változókba felvétel a feltöltött adatokat, amiket átadunk a 
        * hozzátartozó create* -függvényhez 
        * Az itt létrejött id-ket a kapcsoló táblákba töltjük ezzel létrehozva a
        * táblák közti adatkapcsolatot.
        */
        dd($request->all());
        $company = $this->createCompany($request->only('name','regnr','baan','taxnumber','companytype_id','language_id'));
        $address = $this->createAddress($request->only('address','city','zip'));
        $classroom = $this->createClassroom($request->only('classr','space'));

        // itt töltjük fel a kapcsoló tábla elemeit 
        AddressClassroom::create([
            'address_id'            => $address->id,
            'classroom_id'         => $classroom->id,
        ]);
        CompanyAddress::create([
            'address_id'            => $address->id,
            'company_id'         => $company->id,
        ]);

        return 'Elmentve';
    
    }
    public function createCompany($dat){
        return $company = Company::create($dat);
    }
    public function createAddress($dat){
        return $address = Address::create($dat);
    }
    public function createClassroom($dat){
        return $classroom = Classroom::create($dat);
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
        //--------------------Fejlesztés alatt---------------------//
           // $this->company->delete($id);
        //return redirect('/company');
    }
        protected function valid(array $data)
    {
        // Validációs elemek a felvett input mezőkre.
        // $rule -> milyen szabályok legyenek érvényesek 
            $rule = [
            'name' => 'required|min:2|max:50',
            'regnr' => 'required|numeric|min:2',
            'baan' => 'required|numeric|min:2',
            'taxnumber' => 'required|numeric|min:2',
            'address' => 'required|min:2|max:50',
            'city' => 'required|min:4|max:50',
            'zip' => 'numeric|required|min:2',
            'classr' => 'required|min:4|max:50',
            'space' => 'numeric|required|min:2',
            ];
        // a szabályokhoz tartozó hiba üzenetek 
            // ezeket nyelvi fájlokból olvas ki 
            $message = [

            'name.required' => 'validation.companyNameRequired',
            'name.min' => 'validation.companyNameMin',
            'name.max' => 'validation.companyNameMax',

            'regnr.required' => 'validation.regnrRequired',
            'regnr.min' => 'validation.regnrMin',
            'regnr.numeric' => 'validation.regnrNumeric',

            'baan.required' => 'validation.baanRequired',
            'baan.min' => 'validation.baanMin',
            'baan.numeric' => 'validation.baanNumeric',

            'taxnumber.required' => 'validation.taxnumberRequired',
            'taxnumber.min' => 'validation.taxnumberMin',
            'taxnumber.numeric' => 'validation.taxnumberMax',

            'address.required' => 'validation.addressRequired',
            'address.min' => 'validation.addressMin',
            'address.max' => 'validation.addressMax',

            'city.required' => 'validation.cityRequired',
            'city.min' => 'validation.cityMin',
            'city.max' => 'validation.cityMax',

            'zip.required' => 'validation.zipRequired',
            'zip.min' => 'validation.zipMin',
            'zip.numeric' => 'validation.zipNumeric',

            /*'class' => 'required|min:4|max:50',
            'space' => 'numeric|required|min:2',
            itt folyt köv
            */

            'classr.required' => 'validation.classRequired',
            'classr.min' => 'validation.classMin',
            'classr.max' => 'validation.classMax',            

            'space.required' => 'validation.spaceRequired',
            'space.min' => 'validation.spaceMin',
            'space.numeric' => 'validation.spaceNumeric',

            ];
        return Validator::make($data,$rule,$message);
    }
     public function data($id)
    {
        $address = Company::find($id)->sites()->get();
        $add;
        foreach ($address as $aaa) {
            $add = $aaa->id;
        }
       
        $compa = Company::where('id', $id)->get(); 
        $class = Address::find($add)->classroom()->get();
       

        
       return view('company.alldata')->with('address', $address)
                                     ->with('compa', $compa)
                                     ->with('class', $class);
    }

    public function classTo($id)
    {
         $address = Address::where('id', $id)->get();
            return view('company.createclass')->with('address', $address);

    }



    public function classAdd(Request $request, $id)
    {

        //--------------------- Validáció befejezése!!! --------------------//
        /*
        $validat = $this->valid($request->all());
         if ($validat->fails()) 
             return redirect('/company')
                            ->withErrors($validat->errors()->all())
                            ->withInput();*/

        $classroom = $this->createClassroom($request->only('name','space'));

        AddressClassroom::create([
            'address_id'            => $id,
            'classroom_id'         => $classroom->id,
        ]);

        return 'Elmentve';
       return view('company.alldata');
    }

}
