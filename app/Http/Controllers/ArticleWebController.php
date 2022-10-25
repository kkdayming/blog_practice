<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleWebController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->get(),
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.index', ['articles' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request, Article $article)
    {
        $formFields = $request->validate([
            'title' => ['required'],
            'tags' => ['required'],
            'description' => ['required']
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Article::create($formFields);


        return redirect('/')->with('message', 'Created!');
    }

    public function manage()
    {
        return view('articles.manage', ['articles' => auth()->user()->articles()->get()]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function destroy(Article $article)
    {
        if ($article->user_id !== auth()->id()) {
            abort('403', 'Unauthorized action.');
        }
        $article->delete();
        return redirect('/articles/manage')->with('message', 'Deleted!');
    }

    public function update(Request $request, Article $article)
    {
        $formFields = $request->validate([
            'title' => ['required'],
            'tags' => ['required'],
            'description' => ['required']
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }
        $formFields['user_id'] = auth()->id();

        $article->update($formFields);

        return redirect('/articles/manage')->with('message', 'Updated!');
    }
}
