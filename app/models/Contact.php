<?php
class Contact extends Eloquent
{
protected $softDelete = true;
protected $fillable = array('client_id','account_link');

/*inverse relationship to Client
public function client()
{
	return $this->belongsTo('Client');
} */

/*Relationship to Channel : A contact has one channel
public function channel()
{
	return $this->belongsTo('Channel');
}*/
}