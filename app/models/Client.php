<?php
class Client extends Eloquent
{
	protected $fillable = array('full_name');
	protected $softDelete = true;

/*Relationship to Channel*/
public function Contact()
{
return $this->belongsToMany('Contact');
}

}