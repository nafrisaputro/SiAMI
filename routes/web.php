<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/master', function () {
    return view('dashboard');
});


route::get('/', 'AuthController@login')->name('login');
route::post('/postlogin', 'AuthController@postlogin');
route::get('/logout', 'AuthController@logout');


route::group(['middleware' => ['auth', 'CekRole:Admin']], function () {
    route::get('/dashboard', 'DashboardController@index');

    route::get('/coba', 'CobaController@index');
    Route::post('/coba/create', 'CobaController@create');
    route::get('/coba/{id}/edit', 'CobaController@edit');
    route::post('/coba/{id}/update', 'CobaController@update');
    route::get('/coba/{id}/delete', 'CobaController@delete');

    route::get('/jurusan', 'JurusanController@index');
    Route::post('/jurusan/create', 'JurusanController@create');
    route::get('/jurusan/{id}/edit', 'JurusanController@edit');
    route::post('/jurusan/{id}/update', 'JurusanController@update');
    route::get('/jurusan/{id}/delete', 'JurusanController@delete');

    route::get('/prodi', 'ProdiController@index');
    Route::post('/prodi/create', 'ProdiController@create');
    route::get('/prodi/{id}/edit', 'ProdiController@edit');
    route::post('/prodi/{id}/update', 'ProdiController@update');
    route::get('/prodi/{id}/delete', 'ProdiController@delete');

    route::get('/form5', 'Form5ptppController@index');
    Route::post('/form5/create', 'Form5ptppController@create');
    route::get('/form5/{id}/edit', 'Form5ptppController@edit');
    route::post('/form5/{id}/update', 'Form5ptppController@update');
    route::get('/form5/{id}/delete', 'Form5ptppController@delete');

    // route::get('test', 'TEsting@test');    
});

route::group(['middleware' => ['auth', 'CekRole:Admin,Ketua Jurusan']], function () {
    route::get('/dashboard', 'DashboardController@index');

    route::get('/form5/kajur', 'Form5ptppController@kajur');


    route::get('/ptpp/jurusan', 'PtppController@jurusan');
});

route::group(['middleware' => ['auth', 'CekRole:Admin,Ketua Program Studi']], function () {
    route::get('/dashboard', 'DashboardController@index');

    route::get('/form2', 'Form2Controller@index');

    route::get('/form5/kps', 'Form5ptppController@kps');
    // Route::post('/form5/edit1', 'Form5ptppController@edit1');

    route::get('/ptpp/prodi', 'PtppController@prodi');
});

route::group(['middleware' => ['auth', 'CekRole:Admin,Kantor Penjaminan Mutu']], function () {
    route::get('/dashboard', 'DashboardController@index');

    route::get('/form5', 'Form5ptppController@index');
    Route::post('/form5/create', 'Form5ptppController@create');
    // route::get('/form5/{id}/edit', 'Form5ptppController@edit');
    // route::post('/form5/{id}/update', 'Form5ptppController@update');
    route::get('/form5/{id}/delete', 'Form5ptppController@delete');

    route::get('/ptpp', 'PtppController@index');

    route::get('/form1form2', 'Form1form2Controller@index');

    route::get('/form1form2/dataform1', 'Form1form2Controller@dataform1');
    route::post('/form1form2/create', 'Form1form2Controller@create');
    route::get('/form1form2/{id_form1}/edit', 'Form1form2Controller@edit');
    route::post('/form1form2/{id_form1}/update', 'Form1form2Controller@update');
    route::get('/form1form2/{id_form1}/delete', 'Form1form2Controller@delete');

    route::get('/form1form2/dataform2', 'Form1form2Controller@dataform2');
    route::post('/form1form2/create2', 'Form1form2Controller@create2');
    route::get('/form1form2/{id_form2}/delete2', 'Form1form2Controller@delete2');
});
