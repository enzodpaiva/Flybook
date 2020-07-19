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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//rotas de admin
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/register', 'Auth\RegisterAdminController@registeradmin')->name('admin.register');
Route::post('/registeradmin', 'Auth\RegisterAdminController@store');


Route::get('/admin/rampa-list', 'RampaController@index')->name('admin.rampa-list');
Route::get('/admin/rampa-create', 'RampaController@create')->name('admin.rampa-create');
Route::post('/admin/rampa-store', 'RampaController@store');
Route::get('/admin/rampa-apagar/{id}', 'RampaController@destroy');
Route::get('/admin/rampa-edit/{id}', 'RampaController@edit')->name('admin.rampa-update');
Route::post('/admin/rampa-store/{id}', 'RampaController@update');

// Route::get('/admin/tipo-asa-delta-list', 'TipoAsaDeltaAdminController@index')->name('admin.tipo-asa-delta-list');
// Route::get('/admin/tipo-asa-delta-create', 'TipoAsaDeltaAdminController@create')->name('admin.tipos-asa-delta-create');
// Route::post('/admin/tipo-asa-delta-store', 'TipoAsaDeltaAdminController@store');
// Route::get('/admin/tipo-asa-delta-apagar/{id}', 'TipoAsaDeltaAdminController@destroy');
// Route::get('/admin/tipo-asa-delta-edit/{id}', 'TipoAsaDeltaAdminController@edit')->name('admin.tipos-asa-delta-edit');
// Route::post('/admin/tipo-asa-delta-store/{id}', 'TipoAsaDeltaAdminController@update');


Route::get('/admin/fabricante-list', 'FabricanteAdminController@index')->name('admin.fabricante-list');
Route::get('/admin/fabricante-create', 'FabricanteAdminController@create')->name('admin.fabricante-create');
Route::post('/admin/fabricante-store', 'FabricanteAdminController@store');
Route::get('/admin/fabricante-apagar/{id}', 'FabricanteAdminController@destroy');
Route::get('/admin/fabricante-edit/{id}', 'FabricanteAdminController@edit')->name('admin.fabricante-edit');
Route::post('/admin/fabricante-store/{id}', 'FabricanteAdminController@update');

Route::get('/admin/modelo-asa-delta-list', 'ModeloAsaDeltaAdminController@index')->name('admin.modelo-asa-delta-list');
Route::get('/admin/modelo-asa-delta-create', 'ModeloAsaDeltaAdminController@create')->name('admin.modelo-asa-delta-create');
Route::post('/admin/modelo-asa-delta-store', 'ModeloAsaDeltaAdminController@store');
Route::get('/admin/modelo-asa-delta-apagar/{id}', 'ModeloAsaDeltaAdminController@destroy');
Route::get('/admin/modelo-asa-delta-edit/{id}', 'ModeloAsaDeltaAdminController@edit')->name('admin.modelo-asa-delta-edit');
Route::post('/admin/modelo-asa-delta-store/{id}', 'ModeloAsaDeltaAdminController@update');

Route::get('/admin/piloto-list', 'PilotoAdminController@index')->name('admin.piloto-list');
Route::get('/admin/piloto-apagar/{id}', 'PilotoAdminController@destroy');
Route::get('/admin/piloto-edit/{id}', 'PilotoAdminController@edit')->name('admin.piloto-edit');
Route::get('/admin/piloto-store/{id}', 'PilotoAdminController@update');


Route::get('/admin/voo-list', 'VooAdminController@index')->name('admin.voo-list');
Route::get('/admin/voo-create', 'VooAdminController@create')->name('admin.voo-create');


Route::get('/admin/asa-delta-list', 'AsaDeltaAdminController@index')->name('admin.asa-delta-list');
Route::get('/admin/asa-delta-create', 'AsaDeltaAdminController@create')->name('admin.asa-delta-create');
Route::post('/admin/asa-delta-store', 'AsaDeltaAdminController@store');
Route::get('/admin/asa-delta-apagar/{id}', 'AsaDeltaAdminController@destroy');
Route::get('/admin/asa-delta-edit/{id}', 'AsaDeltaAdminController@edit')->name('admin.asa-delta-update');
Route::get('/admin/asa-delta-store/{id}', 'AsaDeltaAdminController@update');

Route::post('/admin/rampa-store/{id}', 'RampaController@update');

// Route::get('/admin/rampa-list', 'AdminController@rampaList')->name('admin.rampa-list');

//rotas de instrutor
Route::get('/instrutor', 'InstrutorController@index')->name('instrutor.dashboard');
Route::get('/instrutor/login', 'Auth\InstrutorLoginController@index')->name('instrutor.login');
Route::post('/instrutor/login', 'Auth\InstrutorLoginController@login')->name('instrutor.login.submit');
Route::get('/instrutor/register', 'Auth\RegisterInstrutorController@registerinstrutor')->name('instrutor.register');
Route::post('/registerinstrutor', 'Auth\RegisterInstrutorController@store');
Route::get('/admin/instrutor-list', 'InstrutorAdminController@index')->name('admin.instrutor-list');
Route::get('/admin/instrutor-apagar/{id}', 'InstrutorAdminController@destroy');
Route::get('/admin/instrutor-edit/{id}', 'InstrutorAdminController@edit')->name('admin.instrutor-update');
Route::post('/admin/instrutor-store/{id}', 'InstrutorAdminController@update');


//rotas de piloto
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/piloto/voo-list','HomeController@show')->name('piloto.voo-list');
Route::get('/piloto/voo-create','HomeController@create')->name('piloto.create-voo');
Route::post('/piloto/voo-store','HomeController@store');
Route::get('/piloto/voo-edit/{id}','HomeController@edit')->name('piloto.edit-voo');
Route::post('/piloto/voo-update/{id}','HomeController@update');
Route::get('/piloto/voo-apagar/{id}','HomeController@destroy');

Route::get('/piloto/asa-list','PilotoAsaController@index')->name('piloto.asa-list');
Route::get('/piloto/asa-create','PilotoAsaController@create')->name('piloto.asa-create');
// Route::get('/piloto/voo-asas','HomeController@mostrarnaview');
Route::post('/piloto/asa-store','PilotoAsaController@store');
Route::get('/piloto/asa-edit/{id}','PilotoAsaController@edit')->name('piloto.asa-edit');
Route::post('/piloto/asa-update/{id}','PilotoAsaController@update');
Route::get('/piloto/asa-apagar/{id}','PilotoAsaController@destroy');
