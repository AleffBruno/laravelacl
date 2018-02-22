<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	private $user;
	
	public function __construct(user $user)
	{
		$this->user= $user;
	}
	
	public function index()
	{
		$users= $this->user::all();
		//$posts = $this->post::paginate(); << poderia ser assim com paginação
		
		return view('painel.users.index',compact('users'));
	}
}
