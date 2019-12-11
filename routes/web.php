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


//  mudaroute
Route::get('/muda/1','MudaController@index')->name('muda_index') ;
Route::get('/muda/speech','MudaController@speech')->name('muda_speech') ;
Route::get('/muda/information','MudaController@information')->name('muda_information') ;
Route::get('/muda/consulter/1','MudaController@consulter')->name('muda_consulter') ;
Route::get('/muda/new/','MudaController@create')->name('mudada') ;
Route::post('/muda/save','MudaController@store')->name('muda_store') ;
Route::get('/muda/modifier/{id}','MudaController@edit')->name('muda_edit') ;
Route::post('/muda/update/{id}','MudaController@update')->name('muda_update') ;
Route::get('/muda/supprimer/{id}','MudaController@delete')->name('muda_delete') ;
// Route::get('/muda','MudaController@index')->name('muda_index') ;
// Route::get('/muda','MudaController@index')->name('muda_index') ;


//jeuneroute
Route::get('/', function () {
    $title = 'Dashboard' ;
    $associations=App\Association::get();
    return view('welcome',compact('title','associations'));
});
route::get('/jeunesse/2','JeunesseController@index')->name('jeunesse_index');
route::get('/jeunesse/speech','JeunesseController@speech')->name('jeunesse_speech');
route::get('/jeunesse/information','JeunesseController@information')->name('jeunesse_information');
route::get('/jeunesse/consulter/2','JeunesseController@consulter')->name('jeunesse_consulter');
Route::get('/jeunesse/modifier/{id}','JeunesseController@edit')->name('jeunesse_edit') ;
Route::post('/jeunesse/update/{id}','JeunesseController@update')->name('jeunesse_update') ;
Route::get('/jeunesse/new/','JeunesseController@create')->name('jeunesse_create') ;
Route::get('/jeunesse/supprimer/{id}','JeunesseController@delete')->name('jeunesse_delete') ;
Route::post('/jeunesse/save','JeunesseController@store')->name('jeunesse_store') ;


//f3addaddroute
route::get('/f3add/3','F3addController@index')->name('f3add_index');
route::get('/f3add/speech','F3addController@speech')->name('f3add_speech');
route::get('/f3add/information','F3addController@information')->name('f3add_information');
route::get('/f3add/consulter/3','F3addController@consulter')->name('f3add_consulter');
Route::get('/f3add/modifier/{id}','F3addController@edit')->name('f3add_edit') ;
Route::post('/f3add/update/{id}','F3addController@update')->name('f3add_update') ;
Route::get('/f3add/new/','F3addController@create')->name('f3add_create') ;
Route::get('/f3add/supprimer/{id}','F3addController@delete')->name('f3add_delete') ;
Route::post('/f3add/save','F3addController@store')->name('f3add_store') ;

//routeCotisation
Route::get('/cotisations/index','CotisationController@index')->name('cotisation_f3add_index') ;
Route::get('/cotisations/ajouter/{id}','CotisationController@add')->name('cotisation_f3add_add') ;
Route::post('/cotisations/save','CotisationController@store')->name('cotisation_f3add_store') ;
Route::post('/cotisations/modifier/{id}','CotisationController@update')->name('cotisation_f3add_update') ;
Route::get('/cotisations/editer/{id}','CotisationController@edit')->name('cotisation_f3add_edit') ;
Route::post('/cotisations/cotiser','CotisationController@cotiser')->name('cotisation_f3add_cotiser') ;
Route::get('/cotisations/total/{id}','CotisationController@total')->name('cotisation_f3add_total') ;
Route::get('/cotisations/show/{id}','CotisationController@show')->name('cotisation_f3add_show') ;


//sourceroute
route::get('/source/4','SourceController@index')->name('source_index');
route::get('/source/speech','SourceController@speech')->name('source_speech');
route::get('/source/information','SourceController@information')->name('source_information');
route::get('/source/consulter/4','SourceController@consulter')->name('source_consulter');
Route::POST('/source/save','SourceController@store')->name('source_store') ;
Route::get('/source/new/','SourceController@create')->name('source_new') ;
Route::get('/source/modifier/{id}','SourceController@edit')->name('source_edit') ;
Route::get('/source/supprimer/{id}','SourceController@delete')->name('source_delete') ;
Route::post('/source/update/{id}','SourceController@update')->name('source_update') ;

//femmeRoute
Route::get('/femme/5','FemmeController@index')->name('femme_index') ;
Route::get('/femme/speech','FemmeController@speech')->name('femme_speech') ;
Route::get('/femme/information','FemmeController@information')->name('femme_information') ;
Route::get('/femme/consulter/5','FemmeController@consulter')->name('femme_consulter') ;
Route::get('/femme/new/','FemmeController@create')->name('femme_new') ;
Route::post('/femme/save','FemmeController@store')->name('femme_store') ;
Route::get('/femme/modifier/{id}','FemmeController@edit')->name('femme_edit') ;
Route::post('/femme/update/{id}','FemmeController@update')->name('femme_update') ;
Route::get('/femme/supprimer/{id}','FemmeController@delete')->name('femme_delete');

//acceuilRoute
Route::get('/acceuil/discours','WelcomeController@speech')->name('acceuil_speech');
Route::get('/acceuil/actulites','WelcomeController@news')->name('acceuil_news');
Route::get('/acceuil/evenements','WelcomeController@event')->name('acceuil_event');
Route::get('/acceuil/presentation','WelcomeController@presentation')->name('acceuil_presentation');
