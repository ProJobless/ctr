<?php
class UserController extends BaseController
{
	public function getIndex()
	{
		return View::make('users.login')->with('postFunc','UserController@postLogin');
	}

	public function getRegister()
	{
		return View::make('users.register')->with('postFunc', 'UserController@postCreate');
	}

	public function postCreate()
	{
		$full_name = Input::get('full_name');
		$email= Input::get('email');
		$password=Input::get('password');
		$user=User::create (array('full_name'=>$full_name, 'email'=>$email, 'password', 'password'=>Hash::make($password)));
	}

	public function postLogin()
	{
		$email= Input::get('email');
		$password=Input::get('password');
		$credentials=array('email'=>$email, 'password'=>$password);
		if(Auth::attempt($credentials))
		{
			return Redirect::route('home')->with('flash_notice', 'You are successfully logged in.');
		}
		 return Redirect::route('users.index')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
		
	}
}