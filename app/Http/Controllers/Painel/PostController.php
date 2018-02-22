<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use Gate;

class PostController extends Controller
{
	private $post;
	
	public function __construct(Post $post)
	{
		$this->post = $post;
	}
	
    public function index()
    {
    	if(Gate::denies('view_post'))
    	{
    		return redirect()->back();
    	}
    	
    	$posts = $this->post::all();
    	
    	//$posts = $this->post::paginate(); << poderia ser assim com paginação
    	
    	return view('painel.post.index',compact('posts'));
    }
}
