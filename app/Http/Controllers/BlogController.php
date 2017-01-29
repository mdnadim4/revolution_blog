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
        $data = Blog::findOrFail($id);
        return view('blog.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Blog::findOrFail($id);
        $data->update($input);
        return redirect('/');

    }

    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $data->delete();
        return redirect('/blog/bin');
    }

    public function bin()
    {
        $deletedblog = Blog::onlyTrashed()->get();
        return view('blog.bin', compact('deletedblog'));
    }
}
