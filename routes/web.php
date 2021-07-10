<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function () {
    Route::Resource('/municipios','municipios_adminController');
    Route::get('/lista','municipios_adminController@listarmun');
    Route::post('/agregar_municipio','municipios_adminController@agregamun');
    Route::post('/ver_eliminar','municipios_adminController@verelimina');
    Route::post('/acepta_eliminar','municipios_adminController@aceptaelimina');
    Route::post('/ver_actualizar','municipios_adminController@vereactualiza');
    Route::post('/acepta_actualizar','municipios_adminController@aceptactualizar');
});

