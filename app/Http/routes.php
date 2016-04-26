<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
return view('auth/login');
});

Route::get('home', [
'uses'=>'Home@index',
'as' => 'home'
]);

// Route sentmail...
Route::get('mail/sent', [
'uses'=>'SentController@sent',
'as' => 'mail/sent'
]);

// Route verification...
Route::post('login', [
'uses'=>'UserController@login',
'as' => 'login'
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('logout', [
'uses'=>'Auth\AuthController@logout',
'as'=>'logout'
]);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('mail/draft', 'MailController@draft');
Route::resource('mail', 'MailController');
Route::get('mail/verificar/{remember_token}','MailController@verificar');

//Se creo ésta ruta para probar el envío de la verificación por correo.
Route::get('sendemail', function () {

$data = array(
'name' => "Learning Laravel",
);

Mail::send('emails.welcome', $data, function ($message) {

$message->from('hgm1284@gmail.com', 'Welcome');

$message->to('melvin.r.a.cr@gmail.com')->subject('Learning Laravel test email');

});

return "Your email has been sent successfully";

});
});