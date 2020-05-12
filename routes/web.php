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


route::group(['middleware' => ['auth', 'CekRole:Super Admin']], function () {
    // route::get('/dashboard', 'DashboardController@index');
    route::get('/coba/home', 'DashboardController@admin');

    route::get('/coba', 'CobaController@index');
    Route::post('/coba/create', 'CobaController@create');
    // Route::post('/coba/{id}/edit1', 'CobaController@edit1');
    route::get('/coba/{id}/edit', 'CobaController@edit');
    route::post('/coba/{id}/update', 'CobaController@update');
    route::get('/coba/{id}/delete', 'CobaController@delete');

    route::get('/jurusan', 'JurusanController@index');
    Route::post('/jurusan/create', 'JurusanController@create');
    route::post('/jurusan/update', 'JurusanController@update');
    route::get('/jurusan/{id}/delete', 'JurusanController@delete');

    route::get('/prodi', 'ProdiController@index');
    Route::post('/prodi/create', 'ProdiController@create');
    route::post('/prodi/update', 'ProdiController@update');
    route::get('/prodi/{id}/delete', 'ProdiController@delete');

<<<<<<< HEAD
    route::get('/coba/userslvl', 'UserslvlController@index');
    Route::post('/userslvl/create', 'UserslvlController@create');
    route::post('/userslvl/update', 'UserslvlController@update');
    route::get('/userslvl/{id_lvl}/delete', 'UserslvlController@delete');

    // route::get('/form5', 'Form5ptppController@index');
    // Route::post('/form5/create', 'Form5ptppController@create');
    // route::post('/form5/update', 'Form5ptppController@update');
    // route::get('/form5/{id}/delete', 'Form5ptppController@delete');

=======
    route::get('/form5', 'Form5ptppController@index');
    Route::post('/form5/create', 'Form5ptppController@create');
    route::post('/form5/update', 'Form5ptppController@update');
    route::get('/form5/{id}/delete', 'Form5ptppController@delete');
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
    // route::get('test', 'TEsting@test');    
});

route::group(['middleware' => ['auth', 'CekRole:Ketua Jurusan']], function () {
    // route::get('/dashboard', 'DashboardController@index');
    route::get('/coba/homekajur', 'DashboardController@kajur');

    route::get('/form5/kajur', 'Form5ptppController@kajur');
    Route::post('/form5/edit2', 'Form5ptppController@edit2');


    route::get('/ptpp/jurusan', 'PtppController@jurusan');

    route::get('/jadwal/kajur', 'JadwalController@kajur');

    route::get('/jadwalaudit/kajur', 'JadwalAuditController@kajur');
});

route::group(['middleware' => ['auth', 'CekRole:Ketua Program Studi']], function () {
    // route::get('/dashboard', 'DashboardController@index');
    route::get('/coba/homekps', 'DashboardController@kps');

    route::post('/form2/createA', 'Form2Controller@createA');
    route::post('/form2/createB', 'Form2Controller@createB');
    route::post('/form2/createC', 'Form2Controller@createC');
    route::post('/form2/createD', 'Form2Controller@createD');
    route::post('/form2/createE', 'Form2Controller@createE');
    route::post('/form2/createF', 'Form2Controller@createF');
    route::post('/form2/createG', 'Form2Controller@createG');
    route::post('/form2/createH', 'Form2Controller@createH');

<<<<<<< HEAD
    route::get('/form2', 'Form2Controller@index');
    route::get('/form2/histori', 'Form2Controller@histori');
    route::post('/form2/{id_form2}/update', 'Form2Controller@update');
    route::get('/form2/{id_form2}/delete', 'Form2Controller@delete');
    // route::get('/form2', 'Form2Controller@jadwalform2');  
=======
    route::post('/form2/createA', 'Form2Controller@createA');
    route::post('/form2/createB', 'Form2Controller@createB');
    route::post('/form2/createC', 'Form2Controller@createC');
    route::post('/form2/createD', 'Form2Controller@createD');
    route::post('/form2/createE', 'Form2Controller@createE');
    route::post('/form2/createF', 'Form2Controller@createF');
    route::post('/form2/createG', 'Form2Controller@createG');
    route::post('/form2/createH', 'Form2Controller@createH');


    route::get('/form2', 'Form2Controller@form2');
    route::get('/form2/histori', 'Form2Controller@index');
    route::post('/form2/{id_form2}/update', 'Form2Controller@update');
    route::get('/form2/{id_form2}/delete', 'Form2Controller@delete');
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911

    route::get('/form5/kps', 'Form5ptppController@kps');
    Route::post('/form5/edit1', 'Form5ptppController@edit1');

    route::get('/ptpp/prodi', 'PtppController@prodi');

    route::get('/jadwal/kps', 'JadwalController@kps');

    route::get('/jadwalaudit/kps', 'JadwalAuditController@kps');
});

route::group(['middleware' => ['auth', 'CekRole:Staff KJM']], function () {
    route::get('/dashboard', 'DashboardController@index');
    route::get('/coba/homekjm', 'DashboardController@kjm');

    route::get('/jadwal', 'JadwalController@index');
    Route::post('/jadwal/create', 'JadwalController@create');
    route::post('/jadwal/edit', 'JadwalController@edit');
    route::get('/jadwal/{id_jadwal}/delete', 'JadwalController@delete');

    route::get('/jadwal', 'JadwalController@index');
    Route::post('/jadwal/create', 'JadwalController@create');
    route::post('/jadwal/edit', 'JadwalController@edit');
    route::get('/jadwal/{id_jadwal}/delete', 'JadwalController@delete');

    route::get('/form5', 'Form5ptppController@index');
    Route::post('/form5/create', 'Form5ptppController@create');
    route::post('/form5/edit', 'Form5ptppController@edit');
    route::get('/form5/{id}/delete', 'Form5ptppController@delete');

    route::get('/ptpp', 'PtppController@index');
    route::post('/ptpp/{id}/btn', 'PtppController@btn');
<<<<<<< HEAD

=======
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911

    route::get('/form1form2', 'Form1form2Controller@index');

    route::get('/form1form2/dataform1', 'Form1form2Controller@dataform1');
    route::post('/form1form2/create', 'Form1form2Controller@create');
    // route::post('/form1form2/{id_form1}/edit', 'Form1form2Controller@edit');
    route::get('/form1form2/{id_form1}/edit', 'Form1form2Controller@edit');
    route::post('/form1form2/{id_form1}/update', 'Form1form2Controller@update');
    route::get('/form1form2/{id_form1}/delete', 'Form1form2Controller@delete');

    route::get('/form1form2/dataform2', 'Form1form2Controller@dataform2');
    route::post('/form1form2/create2', 'Form1form2Controller@create2');
    route::get('/form1form2/{id_form2}/delete2', 'Form1form2Controller@delete2');

    route::get('/form2/{id}/download', 'Form1form2Controller@download');
});
