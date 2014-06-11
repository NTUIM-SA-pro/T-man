<?php

class Workskill extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'workSkills';

	public function work()
    {
        return $this->belongsToMany('Work');
    }

}
