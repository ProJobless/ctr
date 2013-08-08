<?php
class Channel extends Eloquent
{
protected $softDelete = true;

/*Relationship to Client */
public function client()
{
	return $this->belongsToMany('Client', 'contact');
}
}