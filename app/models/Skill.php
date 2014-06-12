<?php

class Skill extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'skills';

	protected $primaryKey = 'sid';

	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Many to many.
	 *
	 * Table: work_skills
	 */
	public function work()
	{
		return $this->belongsToMany('Work', 'work_skills', 'work_skills_sid', 'work_skills_wid');
	}
}
