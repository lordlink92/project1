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
Route::get('/', function(){
    return 'holaaaa';
});
Route::get('/usuarios', function(){
    return 'Usuarios';
});
Route::get('/usuarios/{id}', function($id){
    return 'Mostrando detalle del usuario '.$id;
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function(){
    return 'Crear nuevo usuario ';
});
Route::get('/usuarios/saludo/{name}/{nickname}', function($name,$nickname){
    return "Bienvenido {$name}, tu apodo es {$nickname}";
});
Route::get('/usuarios/saludo/{name}/{nickname?}', function($name,$nickname=null){
   if($nickname){
       return "Bienvenido {$name}, tu apodo es {$nickname}";
   }else{
       return "Bienvenido {$name}, no tienes apodo";
   }

});
Route::get('/usuarios/{id}/edit', function($id){
    return 'Aqui se editan usuarios';
});