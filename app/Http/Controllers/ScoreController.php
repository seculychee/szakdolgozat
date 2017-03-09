<?php

namespace App\Http\Controllers;

use App\Student;
use App\Study;
use App\Subject;

use Illuminate\Http\Request;
use App\Http\Requests;


class ScoreController extends Controller
{ 




    /**************** Tesztelésre létrejött kontroller **************************/






    
    public function result()
    {
        $data = Study::all();
        return view('table')->with('data', $data);
    }
    public function store(Request $request)
    {

         $student = $this->crateContact($request->only('name'));
         $subject = $this->createSubject($request->only('subject'));
        
        Study::create([
            'subject_id'         => $student->id,
            'student_id'         => $subject->id,
        ]);
        return 'Elmentve';
    }
   public function crateContact($dat){
        return $contact = Student::create($dat);
    }
    public function createSubject($dat){
        return $contact = Subject::create($dat);
    }
}
