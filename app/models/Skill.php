<?php

class Skill extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'skills';

	/**
	 * Many to many.
	 *
	 * Table: work_skills
	 */
	public function work()
	{
		return $this->belongsToMany('Work', 'work_skills', 'work_skills_sid', 'work_skills_wid');
	}

	public function user()
	{
		return $this->belongsToMany('User', 'user_skills', 'user_skills_sid', 'user_skills_uid');
	}
}
