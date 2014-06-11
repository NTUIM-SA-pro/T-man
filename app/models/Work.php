<?php

class Work extends Eloquent {

	protected $fillable = array('workname', 'description', 'reward', 'img', 'status', 'user_id','dueTime');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'works';

	public function workskill()
	{
		return $this->hasMany('Workskill');
	}

	public function worktaken()
	{
		return $this->hasMany('Worktaken');
	}
}
