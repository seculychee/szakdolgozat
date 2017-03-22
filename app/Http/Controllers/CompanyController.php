<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyType;
use App\Address;
use App\AddressClassroom;
use App\Classroom;
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


        return view('company.index')->with('company', $company);
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
        
        $company = $this->createCompany($request->only('companyname','regnr','baan','taxnumber','companytype_id','language_id'));
        $address = $this->createAddress($request->only('address','city','zip'));
   
        $classroom = $this->createClassroom($request->only('name','space'));

        // itt töltjük fel a kapcsoló tábla elemeit 
        AddressClassroom::create([
            'address_id'            => $address->id,
            'classroom_id'         => $classroom->id,
        ]);
        CompanyAddress::create([
            'address_id'            => $address->id,
            'company_id'         => $company->id,
        ]);

        $request->session()->reflash();
        $request->session()->flash('success', 'Sikeres felvitel!');
        return redirect()->route('company');

    
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
    protected function valid(array $data)
    {
        // Validációs elemek a felvett input mezőkre.
        // $rule -> milyen szabályok legyenek érvényesek 
            $rule = [
            'companyname' => 'required|min:2|max:50',
            'regnr' => 'required|numeric|min:2',
            'baan' => 'required|numeric|min:2',
            'taxnumber' => 'required|numeric|min:2',
            'address' => 'required|min:2|max:50',
            'city' => 'required|min:4|max:50',
            'zip' => 'numeric|required|min:2',
            'name' => 'required|min:4|max:50',
            'space' => 'numeric|required|min:2',
            ];
        // a szabályokhoz tartozó hiba üzenetek 
            // ezeket nyelvi fájlokból olvas ki 
            $message = [

            'companyname.required' => 'validation.companyNameRequired',
            'companyname.min' => 'validation.companyNameMin',
            'companyname.max' => 'validation.companyNameMax',

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

            'name.required' => 'validation.classRequired',
            'name.min' => 'validation.classMin',
            'name.max' => 'validation.classMax',            

            'space.required' => 'validation.spaceRequired',
            'space.min' => 'validation.spaceMin',
            'space.numeric' => 'validation.spaceNumeric',

            ];
        return Validator::make($data,$rule,$message);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //szerkesztés megjelenítés

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $company = Company::where('id', $id)->get();
        $data = CompanyType::all();
        $dataa = Language::all();
        return view('company.edit')->with('data', $data)
                                     ->with('company', $company)
                                     ->with('dataa', $dataa);
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

        $validat = $this->validater($request->all());
         if ($validat->fails()) 
             return redirect(route('getedit',$id))
                            ->withErrors($validat->errors()->all())
                            ->withInput();

        $company = Company::where('id',$id)->update($request->only('companyname','regnr','baan','taxnumber','companytype_id','language_id'));    
        $address = Company::find($id)->sites()->get();
        foreach ($address as $add) {
            $addresses = Address::where('id',$add->id)->update($request->only('address','city','zip'));
        }
        
        $request->session()->reflash();

        $request->session()->flash('success', 'Sikeres módosítás!');
        return redirect()->route('company');
    }
    

    protected function validater(array $data)
    {
        // Validációs elemek a felvett input mezőkre.
        // $rule -> milyen szabályok legyenek érvényesek 
            $rule = [
            'companyname' => 'required|min:2|max:50',
            'regnr' => 'required|numeric|min:2',
            'baan' => 'required|numeric|min:2',
            'taxnumber' => 'required|numeric|min:2',
            'address' => 'required|min:2|max:50',
            'city' => 'required|min:4|max:50',
            'zip' => 'numeric|required|min:2',
         
            ];
        // a szabályokhoz tartozó hiba üzenetek 
        // ezeket nyelvi fájlokból olvas ki 
            $message = [

            'companyname.required' => 'validation.companyNameRequired',
            'companyname.min' => 'validation.companyNameMin',
            'companyname.max' => 'validation.companyNameMax',

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
            ];
        return Validator::make($data,$rule,$message);
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
         $classroom = Classroom::where('id', $id)->get();
            return view('company.createclass')->with('classroom', $classroom);

    }



    public function classAdd(Request $request, $id)
    {

      
        $aaa;
        $validat = $this->validclass($request->all());
         if ($validat->fails()) 

        //visszavezetjük a cégadatokig a kapcsolókon keresztül
            //visszairányítjuk a termekhez a hibákkal együtt
        $address = Classroom::find($id)->classadd()->get();
        foreach ($address as $add) {
            $addresses = Company::where('id',$add->id)->get();
            foreach ($addresses as $company) {
                $aaa = $company->id;
            }
        }
             return redirect()->route('getdata',$aaa)
                            ->withErrors($validat->errors()->all())
                            ->withInput();

        $classroom = $this->createClassroom($request->only('name','space'));

        AddressClassroom::create([
            'address_id'            => $id,
            'classroom_id'         => $classroom->id,
        ]);
        $request->session()->reflash();
        $request->session()->flash('success', 'Sikeres felvitel!');
       return redirect()->route('getdata',$id);

    }

    public function classupdate(Request $request, $id)
    {
        
        $validat = $this->validclass($request->all());
         if ($validat->fails()) 

             return redirect()->route('classTo',$id)
                            ->withErrors($validat->errors()->all())
                            ->withInput();

        //módosítja azt a sort amit lekérdeztünk a mezőkbe
        $classroom = Classroom::where('id',$id)->update($request->only('name','space'));
        

        //visszavezetjük a cégadatokig a kapcsolókon keresztül
        $aaa;
        $address = Classroom::find($id)->classadd()->get();
        foreach ($address as $add) {
            $addresses = Company::where('id',$add->id)->get();
            foreach ($addresses as $company) {
                $aaa = $company->id;
            }
        }

        $request->session()->reflash();
        $request->session()->flash('success', 'Sikeres módosítás!');
       return redirect()->route('getdata',$aaa);

    }
    protected function validclass(array $data)
    {
        // Validációs elemek a felvett input mezőkre.
        // $rule -> milyen szabályok legyenek érvényesek 
            $rule = [
            'name' => 'required|min:4|max:50',
            'space' => 'numeric|required|min:2',
            ];
        // a szabályokhoz tartozó hiba üzenetek 
            // ezeket nyelvi fájlokból olvas ki 
            $message = [
            'name.required' => 'validation.classRequired',
            'name.min' => 'validation.classMin',
            'name.max' => 'validation.classMax',            

            'space.required' => 'validation.spaceRequired',
            'space.min' => 'validation.spaceMin',
            'space.numeric' => 'validation.spaceNumeric',

            ];
        return Validator::make($data,$rule,$message);
    }


}
