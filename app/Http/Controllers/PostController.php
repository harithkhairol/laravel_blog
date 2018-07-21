<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


use Carbon\Carbon;

class PostController extends Controller
{

	public function __construct()
	{

		$this->middleware('auth')->except(['index','show']);

	}

    //
	public function index(){


		$posts = Post::latest()

		->filter(request(['month','year']))

		->get();



		return view('posts.index', compact('posts'));


	}


		public function create(){

		return view('posts.create');


	}

		public function store(){

			$this->validate(request(), [

			'title' => 'required',
			'body' => 'required'

			]);

			auth()->user()->publish(

				new Post(request(['title','body']))

			);

			session()->flash('message','Your Post has been published!');


			return redirect('/');

	}

			public function show(Post $post){


		return view('posts.show', compact('post'));


	}


		public function edit(Post $post){




		return view('posts.edit', compact('post'));


	}

	public function postEdit(Post $post){


			$this->validate(request(), [

			'title' => 'required',
			'body' => 'required'

			]);

	
        $update = Post::where('id', $post->id)->update(request()->except(['_token','_method']));


        return redirect('/');






	}

		public function delete(Post $post){


	

	
        $delete = Post::where('id', $post->id)->delete();


        return redirect('/');






	}

	public function postlist(){

		$posts = Post::latest()

		->filter(request(['month','year']))

		->get();



		return view('posts.postlist', compact('posts'));


	}

}
