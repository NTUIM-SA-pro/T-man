<?php

class UserWork extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_works';

	public function scopeFindCompositeKey($query, $user_id, $work_id)
    {
        return $query->where('user_works_uid', '=', $user_id)->where('user_works_wid', '=', $work_id);
    }

}
