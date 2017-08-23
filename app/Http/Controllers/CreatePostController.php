<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class CreatePostController extends Controller
{






	function create()
	{

		return view('posts/create');

	}


	function store( Request $request )
	{


		$this->validate( $request, [
			'title' 	=> 'required',
			'content' 	=> 'required',
			]);
		
		$post = new Post( $request->all() );

		auth()->user()->posts()->save( $post );

		return 'Post: ' . $post->title;


		// return view('posts/create');

	}









}
