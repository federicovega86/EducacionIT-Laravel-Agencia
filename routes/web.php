<?php

use Illuminate\Support\Facades\Route;
// DB::static method
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fruta', function (){
    return 'Hola soy una fruta';
});

Route::get('/prueba', function () {
    $nombre = 'Fede';
    return view('prueba', array(
        'nombre' => $nombre
    ));
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/procesa', function ()
{
    //capturamos dato enviado por el form
    $nombre = request()->input('nombre');
    $marcas = [
                'AMD', 'Fernet', 'Audiotechnica',
                'Intel', 'Toshiba', 'Apple'
              ];

    return view('procesa',
                    [
                        'nombre'=>$nombre,
                        'marcas'=>$marcas
                    ]
                );
});


Route::get('/regiones', function (){
    
    // $regiones = DB::table('regiones')->get();
    // return view('regiones', ['regiones'=>$regiones]);

    $regiones = DB::select('select idRegion, regNombre from regiones');
    // dd($regiones);
    // return isset($regiones) ? ['regiones'=>$regiones] : 'No hay regiones';
    return view('regiones', ['regiones'=>$regiones]);
});

Route::get('/region/create', function (){
    return view('regionCreate');
});

// insertar una región
Route::post('/region/store', function (){
    $regNombre = request()->regNombre;

    try{
        // DB::beginTransaction();
        DB::insert('INSERT INTO regiones (regNombre) values (:regNombre)', [$regNombre]);
        // DB::commit();
        return redirect('/regiones')
            ->with([
                'mensaje', 'Región: '.$regNombre.' agregada correctamente',
                'css' => 'success'
            ]);
    }catch(\Throwable $th ){
        // DB::rollBack();
        return $th->getMessage();
    }
});