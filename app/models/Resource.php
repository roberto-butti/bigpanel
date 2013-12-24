<?php

class Resource extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'profile' => 'required',
		'contract' => 'required',
		'active' => 'required'
	);
}
