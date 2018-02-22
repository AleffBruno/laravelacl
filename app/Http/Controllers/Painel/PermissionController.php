<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Permission;

class PermissionController extends Controller
{
	private $permission;
	
	public function __construct(Permission $permission)
	{
		$this->permission= $permission;
	}
	
	public function index()
	{
		$permissions = $this->permission::all();
		//$posts = $this->post::paginate(); << poderia ser assim com paginação
		
		return view('painel.permissions.index',compact('permissions'));
	}
	
	public function roles($id)
	{
		//encontrando permissao
		$permission = $this->permission->find($id);
		
		//encontrando roles
		$roles = $permission->getRoles;
		
		return view('painel.permissions.roles',compact('permission','roles'));
	}
}
