<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
	private $role;
	
	public function __construct(Role $role)
	{
		$this->role = $role;
	}
	
	public function index()
	{
		$roles= $this->role::all();
		//$posts = $this->post::paginate(); << poderia ser assim com paginação
		
		return view('painel.roles.index',compact('roles'));
	}
	
	public function permissions($id)
	{
		//encontrando funcao
		$role = $this->role->find($id);
		
		//encontrando permissoes
		$permissions= $role->getPermissions;
		
		return view('painel.roles.permissions',compact('role','permissions'));
	}
}
