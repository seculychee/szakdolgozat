<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ir�ny�t� k�zpont c�mez�s szerint
| get --> URL hely�re beg�pelt string eset�n hova ir�ny�tson , mit csin�ljon
| post --> egy adott k�r�s tov�bb�t�sa a megadott honlapr�l
|
*/

//f?oldal
Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('login', function () {
    return view('pages.login');
});
//regist
Route::get('regist', function () {
    return view('pages.test');
});
// �tmenetileg minden gombra a login a regisztr�ci�s fel�letre ugrik k�s�bbiekbe jav�tani kell
Route::post('login', function () {
    return view('pages.test');
});


