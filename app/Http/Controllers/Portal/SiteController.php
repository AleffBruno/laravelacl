<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Post;
use Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
    	/*
    	$posts = $post->all();
    	//$posts = $post->where('user_id',auth()->user()->id)->get();
        return view('home',compact('posts'));
        */
        return view('portal.home.index');
    }
    
    public function update($idPost)
    {
    	$post = Post::find($idPost);
    	//$post = Post::all();
    	
    	if(Gate::denies('updatePost',$post))
    	{
    		abort(403,"nao authorizado");
    	}
    	
    	//$this->authorize('update-post',$post);
    	
    	return view('post-update',compact('post'));
    }
    
    public function rolesPermissions()
    {
    	$user = auth()->user();
    	echo "User: ".$user->name."<br>";
    	foreach ($user->getRoles as $role)
    	{
    		echo "Roles: ".$role->name."<br>";
    		$permissions = $role->getPermissions;
    		foreach ($permissions as $permissions)
    		{
    			echo $permissions->name."<br>";
    		}
    	}
    	
    }
}
