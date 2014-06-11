<?php

class Skill extends Eloquent {

	protected $table = 'skills';

	public function user()
	{
		return $this->belongsTo('User');
	}
}
