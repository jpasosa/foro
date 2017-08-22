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


		$post = new Post( $request->all() );

		auth()->user()->posts()->save( $post );

		return $post->title;


		// return view('posts/create');

	}









}
