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

Route::get('/', [
  'uses'=>'HomeController@home',
  'as'=>'home'
]);

Route::get('/projet', [
    'uses'=>'HomeController@projet',
    'as'=>'projet'
]);

//slider
Route::get('/dashboard/sliders', [
    'uses'=>'WebController@sliders',
    'as'=>'sliders'
]);

Route::get('/dashboard/add-slider', [
    'uses'=>'WebController@add_slider',
    'as'=>'add.slider'
]);

Route::get('/dashboard/delete-slider/{id}', [
    'uses'=>'WebController@delete_slider'
]);

Route::post('/save-slider', [
    'uses'=>'WebController@save_slider',
    'as'=>'save.slider'
]);

Route::get('/dashboard/edit-slider/{id}', [
    'uses'=>'WebController@editSlider',
    'as'=>'edit.slider'
]);

Route::post('/dashboard/update-slider', [
    'uses'=>'WebController@updateSlider',
    'as'=>'update.slider'
]);

Route::get('/dashboard', [
    'uses'=>'AdminController@dash',
    'as'=>'dash'
]);

//contact page
Route::get('/contact', [
    'uses'=>'HomeController@contact',
    'as'=>'contact'
]);

Route::get('/dashboard/contact', [
    'uses'=>'WebController@contact',
    'as'=>'dash.contact'
]);

Route::post('/store-contact', [
    'uses'=>'ContactController@store',
    'as'=>'store.contact'
]);

//about page
Route::get('/about', [
    'uses'=>'HomeController@about',
    'as'=>'about'
]);
Route::get('/dashboard/about', [
    'uses'=>'AboutController@index',
    'as'=>'dash.about'
]);
Route::post('/store-about', [
    'uses'=>'AboutController@store',
    'as'=>'store.about'
]);

//Blog
Route::get('/blog', [
    'uses'=>'BlogController@blog',
    'as'=>'blog'
]);
Route::post('/comment', [
    'uses'=>'BlogController@comment'
]);
Route::get('/dashboard/blog', [
    'uses'=>'BlogController@index',
    'as'=>'dash.blog'
]);
Route::get('/dashboard/add-article', [
    'uses'=>'BlogController@create',
    'as'=>'add.article'
]);
Route::post('/store-article', [
    'uses'=>'BlogController@store',
    'as'=>'store.article'
]);
Route::get('/blog/article/{id}', [
    'uses'=>'BlogController@show',
    'as'=>'article'
]);

Route::get('/dashboard/delete-article/{id}', [
    'uses'=>'BlogController@delete'
]);

Route::get('/dashboard/edit-article/{id}', [
    'uses'=>'BlogController@edit',
    'as'=>'edit.article'
]);
Route::get('/dashboard/publish-article/{id}', [
    'uses'=>'BlogController@publishArticle',
    'as'=>'publish.article'
]);

Route::post('/dashboard/update-article', [
    'uses'=>'BlogController@update',
    'as'=>'update.article'
]);

//sondage
Route::get('/dashboard/sondage', [
    'uses'=>'SondageController@index',
    'as'=>'dash.sondage'
]);
Route::get('/dashboard/add-sondage', [
    'uses'=>'SondageController@create',
    'as'=>'add.sondage'
]);
Route::get('/dashboard/delete-sondage/{id}', [
    'uses'=>'SondageController@destroy',
    'as'=>'delete.sondage'
]);
Route::get('/dashboard/delete-participant/{id}', [
    'uses'=>'SondageController@deleteParticipant',
    'as'=>'delete.participant'
]);
Route::post('/dashboard/update-sondage', [
    'uses'=>'SondageController@update',
    'as'=>'update.sondage'
]);
Route::get('/dashboard/edit-sondage/{id}', [
    'uses'=>'SondageController@edit',
    'as'=>'edit.sondage'
]);
Route::post('/store-sondage', [
    'uses'=>'SondageController@store'
]);
Route::get('/sondage', [
    'uses'=>'SondageController@sondage',
    'as'=>'sondage'
]);
Route::post('/do-sondage', [
    'uses'=>'SondageController@do_sondage'
]);
Route::get('/result', [
    'uses'=>'SondageController@result',
    'as'=>'result'
]);

//projet
Route::get('/dashboard/projet', [
    'uses'=>'WebController@projet',
    'as'=>'dash.projet'
]);
Route::get('/dashboard/add-projet', [
    'uses'=>'WebController@add_projet',
    'as'=>'add.projet'
]);
Route::post('/store-project', [
    'uses'=>'WebController@store_projet'
]);
Route::get('/projet-details/{id}', [
    'uses'=>'WebController@details_projet',
    'as'=>'details.projet'
]);
Route::get('dashboard/delete/{id}', [
    'uses'=>'WebController@deleteProjet',
    'as'=>'delete.projet'
]);
Route::post('/projet/update', [
    'uses'=>'WebController@updateProjet',
    'as'=>'update.projet'
]);
Route::get('/projet/edit/{id}', [
    'uses'=>'WebController@editProjet',
    'as'=>'edit.projet'
]);

//social
Route::get('/dashboard/social', [
    'uses'=>'SocialController@index',
    'as'=>'social.liste'
]);
Route::get('/dashboard/social/add', [
    'uses'=>'SocialController@create',
    'as'=>'social.create'
]);
Route::post('/dashboard/social/store', [
    'uses'=>'SocialController@store',
    'as'=>'social.store'
]);
Route::post('/dashboard/social/update', [
    'uses'=>'SocialController@update',
    'as'=>'social.update'
]);
Route::get('/dashboard/social/edit/{id}', [
    'uses'=>'SocialController@edit',
    'as'=>'social.edit'
]);
Route::get('/dashboard/social/delete/{id}', [
    'uses'=>'SocialController@destroy',
    'as'=>'social.delete'
]);

//actualite
Route::get('/actualite', [
    'uses'=>'HomeController@actualite',
    'as'=>'actualite'
]);
Route::get('/details-actualite/{id}', [
    'uses'=>'ActualiteController@show',
]);
Route::get('/dashboard/actualite', [
    'uses'=>'ActualiteController@index',
    'as'=>'dash.actualite'
]);
Route::get('/dashboard/add-actualite', [
    'uses'=>'ActualiteController@create',
    'as'=>'add.actualite'
]);
Route::get('/dashboard/delete-actualite/{id}', [
    'uses'=>'ActualiteController@destroy',
    'as'=>'delete.actualite'
]);
Route::get('/dashboard/edit-actualite/{id}', [
    'uses'=>'ActualiteController@edit',
    'as'=>'edit.actualite'
]);
Route::post('/dashboard/update-actualite', [
    'uses'=>'ActualiteController@update',
    'as'=>'update.actualite'
]);
Route::post('/store-actualite', [
    'uses'=>'ActualiteController@store'
]);

//participants au sondage
Route::get('/dashboard/participants', [
    'uses'=>'WebController@participants',
    'as'=>'participants'
]);

//service
Route::get('/service', [
    'uses'=>'ServiceController@index',
    'as'=>'service'
]);
Route::get('/dashboard/service', [
    'uses'=>'ServiceController@service',
    'as'=>'dash.service'
]);
Route::get('/dashboard/add-service', [
    'uses'=>'ServiceController@create',
    'as'=>'add.service'
]);
Route::post('/save-service', [
    'uses'=>'ServiceController@store'
]);
Route::get('/dashboard/service/delete/{id}', [
    'uses'=>'ServiceController@destroy',
    'as'=>'service.delete'
]);
Route::get('/dashboard/service/edit/{id}', [
    'uses'=>'ServiceController@edit',
    'as'=>'service.edit'
]);
Route::post('/dashboard/service/update', [
    'uses'=>'ServiceController@update',
    'as'=>'service.update'
]);

//partenaire
Route::get('/dashboard/partenaire', [
    'uses'=>'PartenaireController@index',
    'as'=>'partenaire.liste'
]);
Route::get('/dashboard/add-partenaire', [
    'uses'=>'PartenaireController@create',
    'as'=>'partenaire.add'
]);
Route::post('/save-partenaire', [
    'uses'=>'PartenaireController@store',
    'as'=>'partenaire.store'
]);
Route::get('/dashboard/partenaire/delete/{id}', [
    'uses'=>'PartenaireController@destroy',
    'as'=>'partenaire.delete'
]);
Route::get('/dashboard/partenaire/edit/{id}', [
    'uses'=>'PartenaireController@edit',
    'as'=>'partenaire.edit'
]);
Route::post('/dashboard/partenaire/update', [
    'uses'=>'PartenaireController@update',
    'as'=>'partenaire.update'
]);



Route::get('/carriere', [
    'uses'=>'HomeController@carriere',
    'as'=>'carriere'
]);
Route::get('/carriere/offres', [
    'uses'=>'HomeController@offre',
    'as'=>'offre'
]);


//offre
Route::get('/dashboard/offre', [
    'uses'=>'OffreController@index',
    'as'=>'dash.offre'
]);
Route::get('/dashboard/add-offre', [
    'uses'=>'OffreController@create',
    'as'=>'add.offre'
]);
Route::get('/dashboard/edit-offre/{id}', [
    'uses'=>'OffreController@edit',
    'as'=>'edit.offre'
]);
Route::post('/dashboard/update-offre', [
    'uses'=>'OffreController@update',
    'as'=>'update.offre'
]);
Route::get('/dashboard/delete-offre/{id}', [
    'uses'=>'OffreController@destroy'
]);
Route::get('/dashboard/delete-postulant/{id}', [
    'uses'=>'OffreController@deletePostulant',
    'as'=>'delete.postulant'
]);
Route::post('/save-offre', [
    'uses'=>'OffreController@store'
]);
Route::post('/save-cv', [
    'uses'=>'OffreController@store_cv'
]);
Route::get('/dashboard/postulants', [
    'uses'=>'OffreController@cv',
    'as'=>'cv'
]);

//faq
Route::get('/faq', [
    'uses'=>'HomeController@faq',
    'as'=>'faq'
]);



//login
Route::get('/login', [
    'uses'=>'AdminController@signin',
    'as'=>'signin'
]);

Route::post('/login', [
    'uses'=>'AdminController@login'
]);

Route::get('/logout', [
    'uses'=>'AdminController@logout',
    'as'=>'logout'
]);
