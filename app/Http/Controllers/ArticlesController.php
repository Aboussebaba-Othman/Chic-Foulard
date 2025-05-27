<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = Auth::id();
        
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/articles'), $imageName);
            $article->image = 'images/articles/' . $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified article.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        // Check if the logged-in user is the owner of the article
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('articles.index')
                ->with('error', 'Vous n\'êtes pas autorisé à modifier cet article.');
        }

        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // Check if the logged-in user is the owner of the article
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('articles.index')
                ->with('error', 'Vous n\'êtes pas autorisé à modifier cet article.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article->title = $request->title;
        $article->content = $request->content;
        
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/articles'), $imageName);
            $article->image = 'images/articles/' . $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // Check if the logged-in user is the owner of the article
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('articles.index')
                ->with('error', 'Vous n\'êtes pas autorisé à supprimer cet article.');
        }

        // Delete image if exists
        if ($article->image && file_exists(public_path($article->image))) {
            unlink(public_path($article->image));
        }

        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article supprimé avec succès.');
    }
}
