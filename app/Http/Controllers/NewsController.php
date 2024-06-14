<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show(News $article)
    {
        $article->load('comments.user'); // Include utilizatorii comentariilor pentru a afișa numele acestora
    return view('news.show', compact('article'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_date' => 'required|date',
        ]);

        News::create($request->all());
        return redirect()->route('news.index');
    }

    public function edit(News $article)
    {
        return view('news.edit', compact('article'));
    }

    public function update(Request $request, News $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_date' => 'required|date',
        ]);

        $article->update($request->all());
        return redirect()->route('news.index');
    }

    public function destroy(News $article)
    {
        $article->delete();
        return redirect()->route('news.index');
    }
}
