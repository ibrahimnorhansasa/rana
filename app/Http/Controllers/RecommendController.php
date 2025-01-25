<?php
namespace App\Http\Controllers;

use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function index()
    {
        $recommends = Recommend::paginate(30);
        return view('recommends.index', compact('recommends'));
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
            $file->move(public_path('public/assets/images/recommends'), $filename);
        }


        Recommend::create([
                'title' => $request->title,
                'text' => $request->text,
                'date' =>date('Y-m-d'),
                'image' => $filename??null,
            ]);
        return redirect()->route('recommends.index')->with('success', 'Post created successfully.');
    }

    public function edit(Recommend $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Recommend $recommend)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);


        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->name . '-' . time() . '.' . $extension;
            $file->move(public_path('public/assets/images/recommends'), $filename);
        }


            $recommend->update([
                'title' => $request->title,
                'text' => $request->text,
                'date' =>date('Y-m-d'),
                'image' => $filename??$recommend->image,
            ]);
        return redirect()->route('recommends.index')->with('success', 'Post updated successfully.');
    }

    public function show(Recommend $recommend){

        return view('front.detail_recommend',compact('recommend'));
    }
    public function destroy(Recommend $recommend)
    {
        $recommend->delete();
        return redirect()->route('recommends.index')->with('success', 'Post deleted successfully.');
    }
}