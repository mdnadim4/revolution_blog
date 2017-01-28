<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $data = Blog::latest()->get();
        return view('blog.index', compact('data'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return redirect('/');
    }

    public function show($id)
    {
        $data = Blog::findOrFail($id);
        return view('blog.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Blog::find($id);
    }

    public function update(Request $request, $id)
    {
        $data = Blog::find($id);
        $input = $request->all();
    }

    public function destroy($id)
    {
        $data = Blog::find($id);
        Blog::delete($data);
    }
}
