<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class Permission extends Model
{
	public function getRoles()
	{
		return $this->belongsToMany(Role::class);
	}
}
