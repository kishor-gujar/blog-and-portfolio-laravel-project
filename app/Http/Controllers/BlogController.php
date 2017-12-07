<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller {

    public function index() {
        $posts = Post::paginate(5);
        return view('blog.index', ['posts' => $posts]);
    }

    public function single($id) {
        $post = Post::find($id);
        return view('blog.single', ['post' => $post]);
    }

    public function category($c) {
        $category = Category::find($c);
        $posts = $category->posts()->paginate(5);
        return view('blog.category', ['posts' => $posts]);
    }

}
