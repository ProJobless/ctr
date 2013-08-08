<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home',array('as'=>'home',function()
{
	return View::make('clients.index');

}));

Route::get('login', array('as'=>'login',function()
{
	return View::make('hello');

}));

Route::post('login', function(){
	$email= Input::get('email');
	$password=Input::get('password');
	$credentials=array('email'=>$email, 'password'=>$password);
	if(Auth::attempt($credentials))
	{
		return Redirect::route('home')->with('flash_notice', 'You are successfully logged in.');
	}
	 return Redirect::route('login')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
}
 );

Route::controller('contacts',  'ContactController');
Route::controller('clients',  'ClientController');
Route::controller('channels',  'ChannelController');
//Route::controller('users', 'UserController');
