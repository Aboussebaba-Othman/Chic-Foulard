<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    
    public function create()
    {
        return view('articles.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
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

    
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    
    public function edit(Article $article)
    {
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('articles.index')
                ->with('error', 'Vous n\'êtes pas autorisé à modifier cet article.');
        }

        return view('articles.edit', compact('article'));
    }

    
    public function update(Request $request, Article $article)
    {
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

    
    public function destroy(Article $article)
    {
        if (Auth::id() !== $article->user_id) {
            return redirect()->route('articles.index')
                ->with('error', 'Vous n\'êtes pas autorisé à supprimer cet article.');
        }

        if ($article->image && file_exists(public_path($article->image))) {
            unlink(public_path($article->image));
        }

        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article supprimé avec succès.');
    }
}
