<?php
use Illuminate\Support\Facades\Auth;

/*
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}/update', 'HomeController@update')->name('update');

Route::get('/roles-permissions', 'HomeController@rolesPermissions')->name('update');
*/

// the prefix was created with "_" because only "painel" get an error
Route::group(['prefix'=>'_painel','middleware'=>'auth'],function(){
	//PostController
	Route::get('posts','Painel\PostController@index');
	
	//PermissionController
	Route::get('permissions','Painel\PermissionController@index');
	Route::get('permission/{id}/roles','Painel\PermissionController@roles');
	
	//RoleController
	Route::get('roles','Painel\RoleController@index');
	Route::get('roles/{id}/permissions','Painel\RoleController@permissions');
	
	//UserController
	Route::get('users','Painel\UserController@index');
	
	//PainelController
	Route::get('/','Painel\PainelController@index');
});

Auth::routes();

Route::get('/','Portal\SiteController@index');

Route::get('/logout',function(){
	echo "deslogado";
	Auth::logout();
});
	