<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Irányító központ címezés szerint
| get --> URL helyére begépelt string esetén hova irányítson , mit csináljon
| post --> egy adott kérés továbbítása a megadott honlapról
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
// átmenetileg minden gombra a login a regisztrációs felületre ugrik késöbbiekbe javítani kell
Route::post('login', function () {
    return view('pages.test');
});


