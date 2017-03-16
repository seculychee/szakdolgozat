<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyType;
use App\Address;
use App\UserBook;
use App\Book as Book;
use App\AddressClassroom;
use App\Classroom as Classroom;
use App\Company as Company;
use App\CompanyAddress;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return view('books.index')->with('company', $company);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $class = Classroom::where('id', $id)->get(); 
       return view('books.create')->with('class',$class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* $validat = $this->valid($request->all());
         if ($validat->fails()) 
             return redirect('/companyAdd')
                            ->withErrors($validat->errors()->all())
                            ->withInput();*/

    /*     TODO : User hozzárendelése a táblához         */

        $book = $this->createBook($request->only('date','classroom_id','user'));
        return 'Elmentve';
    }
    public function createBook($dat){
        return $book = Book::create($dat);
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
    public function userbook()
    {
        $books = Classroom::all();
        $userbooks = UserBook::all();
        //$userbooks = Book::all();

        return view('books.userbook')->with('books',$books)
                                     ->with('userbooks',$userbooks);
    }    
    public function usertolesson($id)
    {
        $userid = Auth::user()->id;

        UserBook::create([
            'user_id'            => $userid,
            'book_id'         => $id,
        ]);
        return redirect('/allbooks');
    }
    public function coachlesson()
    {
        $books = Classroom::all();
        return view('books.coachlesson')->with('books',$books);
    }

}
