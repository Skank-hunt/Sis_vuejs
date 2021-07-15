<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function () {
    Route::Resource('/municipios','municipios_adminController');
    Route::get('/list_mun','municipios_adminController@view');
    Route::post('/findOne','municipios_adminController@getOne');
    Route::post('/deleteOne','municipios_adminController@destroy');
    Route::post('/addOne','municipios_adminController@store');

    Route::get('/lista/{id}/edit','municipios_adminController@edit');
    Route::post('/lista','municipios_adminController@store');
    Route::post('/lista/{id}','municipios_adminController@update');
    Route::delete('/lista/{id}','municipios_adminController@destroy');
//    Route::get('/municipios','municipios_adminController@view');


    Route::Resource('/usuarios','usuarios_adminController');
    Route::get('/lista_usuarios','usuarios_adminController@listauser');
    Route::get('/combobox','usuarios_adminController@combo');
    Route::post('/agregar_usuario','usuarios_adminController@agregauser');
    Route::post('/ver_eliminar_user','usuarios_adminController@verelimina_user');
    Route::post('/acepta_eliminar_user','usuarios_adminController@aceptaelimina_user');
    Route::post('/ver_actualizar_user','usuarios_adminController@vereactualiza_user');
    Route::post('/acepta_actualizar_user','usuarios_adminController@aceptactualizar_user');
});

