<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        } else if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title = ' By ' . $user->name;
        } else {
            $title = '';
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Postingan',
            'post' => $post,
        ]);
    }
}
