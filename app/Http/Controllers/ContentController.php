<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Routing\Controller as BaseController;

class ContentController extends  BaseController{

    function getUserData(){

        $userdata = Menu::all();
        return view('dserdata.index',[
            'userdata' => $userdata,
            'title' => 'INDEX',
        ]);
    }
}