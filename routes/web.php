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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//solicitudescontroller
Route::post('/prueba','SolicitudesController@pruebaG')->name('prueba');
Route::get("/solicitudes", 'SolicitudesController@index')->name('Solicitud')->middleware('auth');
Route::get("/Respuesta", 'SolicitudesController@Respuesta')->name('Respuesta')->middleware('auth');
Route::post("/store", 'SolicitudesController@create')->name('store')->middleware('auth');
Route::get("/movilidad", 'SolicitudesController@show')->name('movilidad')->middleware('auth');
Route::get("/Aprobacion", 'SolicitudesController@showAprobado')->name('Aprobacion')->middleware('auth');
Route::get("/UpdateEstado/{id}/{Estado}", 'SolicitudesController@UpdateEstado')->name('UpdateEstado');
Route::get("/AprobarEstado/{id}/{Estado}", 'SolicitudesController@AprobarEstado')->name('AprobarEstado');

Route::post('/Aprobacion/correo','SolicitudesController@correo' )->name('Aprobacion.correo');

Route::get("/interna", 'InternasController@interna')->name('Interna')->middleware('auth');
Route::post('/InternaStore','InternasController@store')->name('InternaStore');
//PDFController 
Route::get('/SolicitudPDF/{id}', 'PDFController@ViewPDF')->name('SolicitudPDF');

//comentController
Route::get('/FormComent', 'ComentController@index')->name('FormComent');
Route::post('/Coment', 'ComentController@CreateComent')->name('CrearComent');
