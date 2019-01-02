<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
	use SoftDeletes;

    public function states()
	{
		return $this->hasMany('App\State');
	}
}
