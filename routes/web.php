<?php

//use Illuminate\Support\Facades\Route;
/*Route::get('/', function () {
    return view('auth.login');
});*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['admin'])->prefix('admin')->namespace('Admin')->group(function (){
    Route::resource('/luminaria','LuminariasController');
    Route::get('/lista_lum','LuminariasController@view');
    Route::post('/getluminfo','LuminariasController@getOne');

    Route::Resource('/municipios','municipios_adminController');
    Route::get('/list_mun','municipios_adminController@view');
    Route::post('/findOne','municipios_adminController@getOne');
    Route::post('/deleteOne','municipios_adminController@destroy');
    Route::post('/addOne','municipios_adminController@store');
    Route::post('/list_data','municipios_adminController@getData');
    Route::post('/update_data','municipios_adminController@update');

    Route::Resource('/security','securityController');
    Route::get('/getDocs','securityController@getInfo');
    Route::post('/security/{id}','securityController@store');
    Route::delete('/security/{id}','SecurityController@destroy');
    Route::post('/searchOneDoc','securityController@show');


    Route::Resource('/usuarios','usuarios_adminController');
    Route::get('/lista_usuarios','usuarios_adminController@listauser');
    Route::get('/combobox','usuarios_adminController@combo');
    Route::post('/agregar_usuario','usuarios_adminController@agregauser');
    Route::post('/ver_eliminar_user','usuarios_adminController@verelimina_user');
    Route::post('/acepta_eliminar_user','usuarios_adminController@aceptaelimina_user');
    Route::post('/ver_actualizar_user','usuarios_adminController@vereactualiza_user');
    Route::post('/acepta_actualizar_user','usuarios_adminController@aceptactualizar_user');

    Route::get('/lista/{id}/edit','municipios_adminController@edit');
    Route::post('/lista','municipios_adminController@store');
    Route::post('/lista/{id}','municipios_adminController@update');
    Route::delete('/lista/{id}','municipios_adminController@destroy');

    Route::resource('mapa','MapaController');
});


