<?php

namespace App\Http\Controllers;

use App\UserData;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getIndex(){
        return view('welcome');
    }

    public function userData(){
        return view('pages.UserData');
    }

}