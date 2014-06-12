<?php

class Skill extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'skills';

	public function user()
	{
		return $this->belongsTo('User');
	}
}
