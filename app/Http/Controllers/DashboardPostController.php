<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
        ]);

        try {

            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('image-post');
            }

            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

            Post::create($validatedData);

            return redirect()->route('dashboard-posts.create')->with('success', 'Berhasil Tambah Post');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return response()->view('dashboard.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // rules untuk update
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
        ];
        // untuk menhindari jika slug sebelumnya dan sekarang sama kena unique
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        };
        try {
            $validatedData = $request->validate($rules);

            if ($request->file('image')) {
                // cek image lama agar di hapus di storage
                if ($post->image != null) {
                    Storage::delete($post->image);
                }
                // image baru akan di masukan ke storage
                $validatedData['image'] = $request->file('image')->store('image-post');
            }

            // set untuk user saat ini dan excerpt kita limit
            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

            Post::where('id', $post->id)
                ->update($validatedData);

            return redirect()->route('dashboard-posts.index')->with('success', 'Berhasil Update Post');
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect()->route('dashboard-posts.index')->with('success', 'Berhasil Hapus Post');
    }
}
