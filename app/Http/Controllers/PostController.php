<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('create', compact('categories'));
    }


    public function store(Request $request){
        // return $request->all();

        $post = new Post();
        $post-> title = $request->title;
        $post-> email = $request->email;
        $post->save();

        $post->categories()->attach($request->categories);
        return back();
    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $posts = Post::with('categories')->where('title', 'like', '%' . $query . '%')
            ->orWhere('email', 'like', '%' . $query . '%')
            ->paginate(10);

        return response($posts);
    }
}
