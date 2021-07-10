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

    Route::Resource('/usuarios','usuarios_adminController');
    Route::get('/lista_usuarios','usuarios_adminController@listauser');
    Route::get('/combobox','usuarios_adminController@combo');
    Route::post('/agregar_usuario','usuarios_adminController@agregauser');
    Route::post('/ver_eliminar_user','usuarios_adminController@verelimina_user');
    Route::post('/acepta_eliminar_user','usuarios_adminController@aceptaelimina_user');
    Route::post('/ver_actualizar_user','usuarios_adminController@vereactualiza_user');
    Route::post('/acepta_actualizar_user','usuarios_adminController@aceptactualizar_user');
});

