<?php
class ClientController extends BaseController{
/*Filters*/
/*a filter to find the client ID, runs on edit, show, update, delete */
/*Ends Filters*/
protected $layout = 'layouts.master';
	public function getIndex()
	{
		$clients = Client::all();
		$this->layout->content = View::make('clients.index')->with('clients',$clients);
		//$this->layout->nest('content', 'clients.index', array('clients' =>$clients));
	}

	public function getCreate()
	{
		/*Get the create form*/
		$this->layout->content = View::make('clients/create')->with('postFunc', 'ClientController@postCreate');
	}

	public function postCreate()
	{

		/*Get the 'full_name from the form, save it in DB, get the id for the just inserted client
		and use it to insert the contact details as related data */
		if(Input::has('full_name'))
		{
			$full_name = Input::get('full_name');
			$client=Client::create(array('full_name'=>$full_name));
		}
		
		$contact=array(); /* initialise an empty array */
		$accounts_info=Input::only('phone', 'twitter','facebook', 'google_plus'); /*Get the submitted info for the accounts filled*/
		foreach ($accounts_info as $acc => $c) {
			if($c!=''){
		$acc = Input::get($acc);
		array_push($contact, $acc);
			}
		}
		foreach ($contact as $contact_key=>$contact_value) {
			/* Insert into contacts*/
		  Contact::create(array('client_id'=>$client->id, 'account_link'=>$contact_value));
		}	
	}

	public function getShow($clientId)
	{
		/* show a single client's information */
	}

	public function getEdit($clientId)
	{
		/*Edit a client's details*/
		
	}

	public function putUpdate()
	{
		/*Handle edit changes, update record*/
	}

	public function deleteDestroy($clientId)
	{

	}
}