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
        $request->session()->reflash();

        $request->session()->flash('success', 'Sikeres óra felvétel!');
        return redirect('/editor/books');
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

     public function coachlessonupdate($id)
     {
         $books = Book::where('id',$id)->get();
        //$classr = Book::find($id)->terem()->get();
        $classr;
        foreach ($books as $book) {
          $classr = Classroom::where('id',$book->classroom_id)->get();
        }
         return view('books.coachlessonupdate')->with('classr',$classr)
                                               ->with('books',$books);
     }
    public function update(Request $request, $id)
    {
          $company = Book::where('id',$id)->update($request->only('date','classroom_id'));
          $request->session()->reflash();

          $request->session()->flash('success', 'Óra módosítva!');
          return redirect()->route('coach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {
        $booksuser = Book::find($id)->userto()->delete();
        $books = Book::where('id',$id)->delete();

      } catch (Exception $e) {
        $books = Book::where('id',$id)->delete();

      }


        return redirect()->back();



    }
    public function userbook()
    {
        $books = Book::all();
        $userbooks = UserBook::all();


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

    public function coachlessondelete()
    {
        $books = Classroom::all();
        return view('books.coachlesson')->with('books',$books);
    }

    public function userinbook($id)
    {
        $books = UserBook::where('book_id',$id)->get();
        return view('books.userinbook')->with('books',$books);
    }

    public function participate(Request $request, $id)
    {
        $books = UserBook::where('id',$id)->update($request->only('participate'));
        $request->session()->reflash();

        $request->session()->flash('success', 'Megjelenés elmentve!');
        return redirect()->back();
    }

}
