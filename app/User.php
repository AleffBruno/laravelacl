<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getRoles()
    {
    	return $this->belongsToMany(Role::class);
    }

    public function hasPermission(Permission $permission)
    {
    	
    	return $this->hasAnyRoles($permission->getRoles);
    }
    
    public function hasAnyRoles($roles)
    {
    	if(is_array($roles) || is_object($roles))
    	{
    		return !! $roles->intersect($this->getRoles)->count();
    	}

    	return $this->getRoles->contains('name',$roles);
    }
}
