<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(30);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
        ]);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->name . '-' . time() . '.' . $extension;
            $file->move(public_path('public/assets/images/posts'), $filename);
        }


            Post::create([
                'title' => $request->title,
                'text' => $request->text,
                'date' =>date('Y-m-d'),
                'image' => $filename??null,
            ]);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $post->update($request->all());

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->name . '-' . time() . '.' . $extension;
            $file->move(public_path('public/assets/images/posts'), $filename);
        }


            $post->update([
                'title' => $request->title,
                'text' => $request->text,
                'date' =>date('Y-m-d'),
                'image' => $filename??$post->image,
            ]);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }




    public function show(Post $post){


        $randomPosts = Post::inRandomOrder()->limit(3)->get();

        return view('front.detail_post',compact('post','randomPosts'));
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}