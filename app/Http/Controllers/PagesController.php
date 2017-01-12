<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getIndex(){
        return view('welcome');
    }
    public function getAbout(){
        $companyname = "Code excutable";
        $isUserRegistered = false;
        $users = array("Erik","Alex","Attila");

        return view('pages.about')
            ->with("name", $companyname)
            ->with("isUserRegistered", $isUserRegistered)
            ->with("users", $users);

    }
    public function getHelp(){
        return view('pages.help');
    }
public function getHelp1(){
      return view('pages.help1', ['name' => 'valaki']); 
    }

    public function getTest(){
    return view('pages.test');
    }

    public function getValami(){
        return view('pages.valami');
    }
}