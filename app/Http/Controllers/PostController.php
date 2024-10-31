<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $datas = Category::all();
        $models = Post::all();
        return view('Post.index', ['models' => $models,'datas' => $datas]);
    }
    public function create()
    {
        $models = Category::all();
        return view('Post.add',['models' => $models]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:300',
            'category_id' => 'required'
        ]);
        $data = $request->all();

        Post::create($data);

        return redirect('/post')->with('create', 'Created');
    }
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        $post->update($data);

        return redirect('/post')->with('update', 'Updated');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $destroy = Post::findOrFail($id);
        $destroy->delete();
        return redirect('/post')->with('delete', 'deleted');
    }
    public function search(Request $request)
    {
        $models = Post::where('name', 'like', '%' . $request->search . '%')->orderBy('id', 'asc')->paginate(5);
        return response()->json($models);
    }
}
