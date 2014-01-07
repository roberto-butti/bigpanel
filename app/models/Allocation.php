<?php

class Allocation extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'date' => 'required',
		'hours' => 'required',
		'percent' => 'required',
		'allocation' => 'required',
		'resource_id' => 'required',
		'project_id' => 'required'
	);
}
