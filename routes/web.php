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
//Authority Controller
Route::get('/authority',['as'=>'authority.index','uses'=>'AuthorityController@index']);
Route::post('/authority',['as'=>'authority.store','uses'=>'AuthorityController@store']);
Route::get('/authority_view/{id}',['as'=>'authority.authority_view','uses'=>'AuthorityController@authority_view']);
Route::get('/authority_edit/{id}',['as'=>'authority.authority_edit','uses'=>'AuthorityController@authority_edit']);
Route::post('/authority_editpost/{id}',['as'=>'authority.authority_editpost','uses'=>'AuthorityController@authority_editpost']);


//Gunaso Controller
Route::get('/gunaso',['as'=>'gunaso.index','uses'=>'GunasoController@index']);
Route::post('/gunaso',['as'=>'gunaso.store','uses'=>'GunasoController@store']);
Route::get('/gunaso_view/{id}',['as'=>'gunaso.gunaso_view','uses'=>'GunasoController@gunaso_view']);
Route::get('/gunaso_edit/{id}',['as'=>'gunaso.gunaso_edit','uses'=>'GunasoController@gunaso_edit']);
Route::post('/gunaso_editpost/{id}',['as'=>'gunaso.gunaso_editpost','uses'=>'GunasoController@gunaso_editpost']);



//Comment Controller
Route::get('/comment',['as'=>'comment.index','uses'=>'CommentController@index']);
Route::post('/comment',['as'=>'comment.store','uses'=>'CommentController@store']);
Route::get('/comment_view/{id}',['as'=>'comment.comment_view','uses'=>'CommentController@comment_view']);
Route::get('/comment_edit/{id}',['as'=>'comment.comment_edit','uses'=>'CommentController@comment_edit']);
Route::post('/comment_editpost/{id}',['as'=>'comment.comment_editpost','uses'=>'GunasoController@comment_editpost']);

//File Controller
Route::get('/file',['as'=>'file.index','uses'=>'FileController@index']);
Route::post('/file',['as'=>'file.store','uses'=>'FileController@store']);
Route::get('/file_view/{id}',['as'=>'file.file_view','uses'=>'FileController@file_view']);
Route::get('/file_edit/{id}',['as'=>'file.file_edit','uses'=>'FileController@file_edit']);
Route::post('/file_editpost/{id}',['as'=>'file.file_editpost','uses'=>'FileController@file_editpost']);

//FollowUps Controller
Route::get('/followup',['as'=>'followup.index','uses'=>'FollowupController@index']);
Route::post('/followup',['as'=>'followup.store','uses'=>'FollowupController@store']);
Route::get('/followup_view/{id}',['as'=>'followup.followup_view','uses'=>'FollowupController@followup_view']);
Route::get('/followup_edit/{id}',['as'=>'followup.followup_edit','uses'=>'FollowupController@followup_edit']);
Route::post('/followup_editpost/{id}',['as'=>'followup.followup_editpost','uses'=>'FollowupController@followup_editpost']);


//Info Controller
Route::get('/info',['as'=>'info.index','uses'=>'InfoController@index']);
Route::post('/info',['as'=>'info.store','uses'=>'InfoController@store']);
Route::get('/info_view/{id}',['as'=>'info.info_view','uses'=>'InfoController@info_view']);
Route::get('/info_edit/{id}',['as'=>'info.info_edit','uses'=>'InfoController@info_edit']);
Route::post('/info_editpost/{id}',['as'=>'info.info_editpost','uses'=>'InfoController@info_editpost']);


//Registration COntroller
Route::get('/registration',['as'=>'registration.index','uses'=>'RegistrationController@index']);
Route::post('/registration',['as'=>'registration.store','uses'=>'RegistrationController@store']);
Route::get('/registration_view/{id}',['as'=>'registration.registration_view','uses'=>'RegistrationController@registration_view']);
Route::get('/registration_edit/{id}',['as'=>'registration.registration_edit','uses'=>'RegistrationController@registration_edit']);
Route::post('/registration_editpost/{id}',['as'=>'registration.registration_editpost','uses'=>'RegistrationController@registration_editpost']);


//Tags Controller
Route::get('/tags',['as'=>'tags.index','uses'=>'TagsController@index']);
Route::post('/tags',['as'=>'tags.store','uses'=>'TagsController@store']);
Route::get('/tags_view/{id}',['as'=>'tags.tags_view','uses'=>'TagsController@tags_view']);
Route::get('/tags_edit/{id}',['as'=>'tags.tags_edit','uses'=>'TagsController@tags_edit']);
Route::post('/tags_editpost/{id}',['as'=>'tags.tags_editpost','uses'=>'TagsController@tags_editpost']);


//User Controller
Route::get('/user',['as'=>'user.index','uses'=>'UserController@index']);
Route::post('/user',['as'=>'user.store','uses'=>'UserController@store']);
Route::get('/user_view/{id}',['as'=>'user.user_view','uses'=>'UserController@user_view']);
Route::get('/user_edit/{id}',['as'=>'user.user_edit','uses'=>'UserController@user_edit']);
Route::post('/user_editpost/{id}',['as'=>'user.user_editpost','uses'=>'UserController@user_editpost']);
