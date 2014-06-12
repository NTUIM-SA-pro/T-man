<?php

class Worktaken extends Eloquent {

	protected $fillable = array('taken_by','work_id','status');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'worktaken';

	public function work()
    {
        return $this->belongsToMany('Work');
    }

}
