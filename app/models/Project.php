<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'customer' => 'required',
		'description' => 'required',
		'projectmanager' => 'required',
		'active' => 'required'
	);
}
