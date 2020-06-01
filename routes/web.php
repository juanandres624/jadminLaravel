<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/clients', 'ClientsController@store');
Route::get('/clients/create', 'ClientsController@create')->name('clients');


Route::get('/getGenderRequest', function(){
    if(Request::ajax()){
        
        $gender = DB::select('select * from mngGenderType');

        if ($gender) {
            return Response::json($gender);
        }

    }
});

Route::get('/getDocumentsRequest', function(){
    if(Request::ajax()){
        
        $document = DB::select('select * from mngDocumentType');

        if($document){
            return Response::json($document);
        }

    }
});





// Route::get('/clients/{client}', 'ClientsController@show');
// Route::get('/clients/{client}/edit', 'ClientsController@edit');
// Route::get('/clients/{client}/update', 'ClientsController@update');


