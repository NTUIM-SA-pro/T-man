<?php

class Work extends Eloquent {

	protected $fillable = array('wname', 'works_description', 'reward', 'works_img', 'works_uid','dueTime');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'works';

	protected $primaryKey = 'wid';


	/**
	 * Many to many.
	 *
	 * Table: work_skills
	 */
	public function skill()
	{
		return $this->belongsToMany('Skill', 'work_skills', 'work_skills_wid', 'work_skills_sid');
	}

	public function worktaken()
	{
		return $this->hasMany('Worktaken', 'worktaken_wid', 'wid');
	}
}
