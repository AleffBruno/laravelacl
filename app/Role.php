<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Permission;

class Role extends Model
{
	public function getPermissions()
	{
		return $this->BelongsToMany(Permission::class);
	}
}
