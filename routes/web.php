<?php

   Use App\Noticia;
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

Route::get('/','BlogController@index');

Route::get('/agrega_noticia','BlogController@agregar_noticia');

Route::post('/agrega','BlogController@agrega');

Route::get('/lista_noticias','BlogController@lista');

Route::get('/borrar/{id}','BlogController@index');

Route::delete('/borrar/{id}','BlogController@destroy');

Route::get('/editar/{id}','BlogController@editar');

Route::put('/update/{id2}','BlogController@update');







// Ruta con mas de un parámetro
Route::get('/saludo/{nombre}/nickname/{nickname}', function ($nombre,$nickname) {
    return '<h2>Buenos días '.$nombre.' tu sobrenombre es: '.$nickname.'</h2>';
});

// Ruta con parámetros opcionales
Route::get('/saludo/{nombre}/{nickname?}', function ($nombre,$nickname=null) {

	if($nickname){
    return '<h2>Buenos días <b>'.$nombre.'</b> tu sobrenombre es: <b> '.$nickname.'</b></h2>';
	}else
	{
    return '<h2>Buenos días <b>'.$nombre.'</b> y no tienes sobrenombre</h2>';		
	}

});

//Ruta con un parámetro
Route::get('/saludo/{id}', function ($id) {
    return '<h2>Buenos días '.$id.' </h2>';
});

Route::get('pruebasNoticias',function(){


   $Noticias = Noticia::get()->toArray();

   dd($Noticias);

});

